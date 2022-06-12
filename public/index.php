<?php

require_once __DIR__. '/../vendor/autoload.php';

use Yurdiansyah\Belajar\PHP\MVC\App\Router;
use Yurdiansyah\Belajar\PHP\MVC\Controller\HomeController;
use Yurdiansyah\Belajar\PHP\MVC\Controller\ProductController;
use Yurdiansyah\Belajar\PHP\MVC\Middleware\AuthMiddleware;

Router::add('GET','/',HomeController::class, 'index');
Router::add('GET','/hello',HomeController::class, 'hello',[AuthMiddleware::class]);
Router::add('GET','/word',HomeController::class, 'word',[AuthMiddleware::class]);
Router::add('GET','/about',HomeController::class,'about');
Router::add('GET','/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)',ProductController::class,'categories');

Router::run();