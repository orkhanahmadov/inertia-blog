<?php

namespace App\Http\Controllers;

use App\Post;
use Inertia\Response;
use Inertia\ResponseFactory;

class PostsController
{
    private ResponseFactory $response;

    public function __construct(ResponseFactory $response)
    {
        $this->response = $response;
    }

    public function show(Post $post): Response
    {
        return $this->response->render('Post/Show', compact('post'));
    }
}
