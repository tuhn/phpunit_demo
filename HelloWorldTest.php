<?php

// I use include() for the sake of simplicity. In real practice, we use autoloading.
include('HelloWorld.php');

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    public function testWipe()
    {
        $population = 7000;

        $world = new HelloWorld($population);
        $this->assertEquals($population, $world->getPopulation());

        $world->wipe();
        $this->assertEquals(0, $world->getPopulation());
    }
}