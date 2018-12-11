<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10.12.2018
 * Time: 10:54
 */

namespace NtSchool\Action;


use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\Paginator;
use NtSchool\Model\Post;
use Psr\Http\Message\ServerRequestInterface;

class PostsAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $page=$request->getQueryParams()['page'] ?? 1;
        $postPerPage=4;
        $offset=($page-1)* $postPerPage;
        $counter = Manager::select('select COUNT(*) as counter from posts');
        $total=round($counter[0]->counter / $postPerPage,0,PHP_ROUND_HALF_UP);
        $posts = new Paginator(
            Post::skip($offset)->take($postPerPage)->get(),
            $postPerPage,
            $page
        );
        return $this->renderer->make('posts',[
            'posts'=>$posts,
            'total'=>$total
        ]);

    }
}