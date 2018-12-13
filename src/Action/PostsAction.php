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
use NtSchool\Model\Category;
use NtSchool\Model\Post;
use Psr\Http\Message\ServerRequestInterface;

class PostsAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    /** @var \Apix\Log\Logger\File */
    protected $logger;

    public function __construct($view, $logger)
    {
        $this->renderer = $view;
        $this->logger = $logger;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $categories = Category::all();
        $category = Category::where('key', '=', $request->getAttribute('category'))->first();

        $page = $request->getQueryParams()['page'] ?? 1;
        $postPerPage = 4;
        $offset = ($page - 1) * $postPerPage;

        $counter = Manager::table('posts')->count();
        $query = Post::skip($offset)->take($postPerPage);
        if ($category) {
            $query = $query->whereHas(
                'categories',
                function ($query) use ($category) {
                    $query->where('id', '=', $category->id);
                }
            );
            $counter = Manager::table('posts')
                ->join('category_post', 'posts.id', '=', 'category_post.post_id')
                ->where('category_post.category_id', '=', $category->id)->count();
        }
        $total = round($counter / $postPerPage, 0, PHP_ROUND_HALF_UP);
        $posts = new Paginator(
            $query->get(),
            $postPerPage,
            $page
        );

        $this->logger->warning('Some warning');
        return $this->renderer->make('posts', [
            'posts' => $posts,
            'total' => $total,
            'categories' => $categories
        ]);

    }
}