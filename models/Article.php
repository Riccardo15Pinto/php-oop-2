<?php

require_once __DIR__ . '/Customer.php';
class Article extends Customer
{
    private $name;
    private $image;
    private $weight;
    private $price;
    private $ingredients;

    public function __construct($name, $image, $weight, $price, $ingredients, $tipology)
    {
        parent::__construct($tipology);
        $this->setTipology($tipology);
        $this->setName($name);
        $this->setImage($image);
        $this->setWeight($weight);
        $this->setPrice($price);
        $this->setIngredients($ingredients);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    private function setTipology($target)
    {
        if (!$target instanceof Customer && !strlen($target)) return false;
        return $target;
    }

    private function setName($target)
    {
        if (!strlen($target)) {

            $this->name = null;
            return false;
        }
        $this->name = $target;
        return true;
    }

    private function setImage($target)
    {
        if (!strlen($target)) {

            $this->image = null;
            return false;
        }
        $this->image = $target;
        return true;
    }

    private function setWeight($target)
    {
        if (!strlen($target)) {

            $this->weight = null;
            return false;
        }
        $this->weight = $target;
        return true;
    }

    private function setPrice($target)
    {
        if (!strlen($target)) {

            $this->price = null;
            return false;
        }
        $this->price = $target;
        return true;
    }

    private function setIngredients($target)
    {
        if (!strlen($target)) {

            $this->ingredients = null;
            return false;
        }
        $this->ingredients = $target;
        return true;
    }
}
