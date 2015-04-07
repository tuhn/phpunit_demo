<?php

class HelloWorld
{
    protected $population;

    /**
     * Constructor
     */
    public function __construct($population)
    {
        $this->population = (int) $population;
    }

    /**
     * Basic getter
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Basic setter
     */
    public function setPopulation($value)
    {
        $this->population = (int) $value;
    }


    /**
     * Kill everyone
     */
    public function wipe()
    {
        $this->population = 0;
    }

    /**
     * Exercise: implement this method
     * @return void
     */
    public function changePopulation($delta)
    {
        // TODO
    }

    /**
     * Exercise: implement this method
     * @return boolean
     */
    public function isWiped()
    {
        // TODO
    }
}
