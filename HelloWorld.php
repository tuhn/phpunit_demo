<?php

class HelloWorld
{
    protected $population;

    public function __construct($population)
    {
        $this->population = (int) $population;
    }

    public function wipe()
    {
        $this->population = 0;
    }

    public function getPopulation()
    {
        return $this->population;
    }
}
