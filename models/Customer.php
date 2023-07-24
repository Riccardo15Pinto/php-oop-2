<?php

class Customer
{
    public $tipology;

    public function __construct($tipology)
    {
        $this->setTipology($tipology);
    }

    public function getTipology()
    {
        return $this->tipology;
    }

    private function setTipology($target)
    {
        if (!$target) {

            $this->tipology = null;
            return false;
        }
        $this->tipology = $target;
        return true;
    }
}
