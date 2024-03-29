<?php

namespace App\Http\Controllers;

use App\Post;
use Inertia\Response;
use Inertia\ResponseFactory;

class HomeController
{
    private ResponseFactory $response;

    public function __construct(ResponseFactory $response)
    {
        $this->response = $response;
    }

    public function __invoke(): Response
    {
        $posts = Post::all();

        return $this->response->render('Home', compact('posts'));
    }
}
