<?php
namespace Test\Fizzbuzz;
use Fizzbuzz\Fizzbuzz;

class FizzbuzzTest extends \PHPUnit_Framework_TestCase {
    
    function testFizz() {
        $Fizzbuzz = new Fizzbuzz();
        $this->assertEquals("Fizz",$Fizzbuzz->process(3));
    }
}