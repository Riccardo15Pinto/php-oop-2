<?php

require_once __DIR__ . '/Article.php';

class Store extends Article
{
    private $product;

    public function __construct($product)
    {
        $this->setProduct($product);
    }

    public function getProduct()
    {
        return $this->product;
    }

    private function setProduct($target)
    {
        if (!$target instanceof Article && !strlen($target)) return false;
        return $target;
    }
}
