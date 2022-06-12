<?php

namespace Yurdiansyah\Belajar\PHP\MVC\Controller;

use Yurdiansyah\Belajar\PHP\MVC\App\View;

class HomeController
{
    function index(): void
    {
        $model = [
            "title" => "Belajar MVC",
            "conten" => "MVC Yurdiansyah"
        ];
        View::render('Home/index',$model);
    }

    function hello(): void
    {
        echo "HomeController.hello()";
    }

    function word(): void
    {
        echo "HomeController.word()";
    }

    function about(): void
    {
        echo "Autor : Yurdiansyah";
    }

    function login():void{
        $request = [
            "username" => $_GET['username'],
            "password" => $_GET['password']
        ];

        $user = [

        ];

        $respone = [
            "massage" => "login sukses"
        ];
    }
}  