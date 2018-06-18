<?php
use App\Http\Controllers\TestController;
use App\Http\Middlewares\TestMiddleware;

/** @var \Layton\App $app */
$app->group('/api', function($route) {

    $route->get('/user/:num', TestController::class . '>test');

})->middleWare(TestMiddleware::class);
