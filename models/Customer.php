<?php

class Customer
{
    private $tipology;

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
        if (!strlen($target)) {

            $this->tipology = null;
            return false;
        }
        return true;
    }
}
