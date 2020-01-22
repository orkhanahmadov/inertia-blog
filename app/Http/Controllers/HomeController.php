<?php

namespace App\Http\Controllers;

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
        return $this->response->render('Home', [
            //
        ]);
    }
}
