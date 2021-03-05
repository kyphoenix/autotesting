<?php

require 'sum.php';
require_once 'PHPUnit/Framework/TestCase.php';
class functionTest extends PHPUnit_Framework_TestCase
{
    public function testsumReturnsTheCorrectValue()
    {
        
        $this->assertEquals(4, add(2,2));
        $this->assertEquals(8, add(2,6));

    }
}
