<?php

namespace Yurdiansyah\Belajar\PHP\MVC\Controller;

class ProductController
{
    function categories(string $productId,string $categoriId):void
    {
        echo "Product $productId ,category $categoriId";
    }
}