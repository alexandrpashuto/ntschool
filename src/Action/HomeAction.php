<?php

namespace NtSchool\Action;

use Psr\Http\Message\ServerRequestInterface;

final class HomeAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
//        $id = $request->getAttribute('slug');
        return $this->renderer->make('index');

    }
}
