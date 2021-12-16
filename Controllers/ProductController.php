<?php

class ProductController 
{

    public function index()
    {
        return include 'Views/fontend/products/index.php';
    }
    public function show()
    {
        echo __METHOD__;
    }
}
?>