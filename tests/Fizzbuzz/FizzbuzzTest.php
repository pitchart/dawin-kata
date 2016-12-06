<?php
namespace Test\Fizzbuzz;
use Fizzbuzz\Fizzbuzz;

class FizzbuzzTest extends \PHPUnit_Framework_TestCase {
    protected $fb;

    function setup() {
        $this->fb = new Fizzbuzz();
    }
    
    function testFizz() {
        $this->assertEquals("Fizz",$this->fb->process(3));
    }

    function testBuzz() {
        $this->assertEquals("Buzz", $this->fb->process(5));
    }
}