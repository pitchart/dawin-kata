<?php

namespace Tests\Kata;

use Kata\FizzBuzz;
use Kata\FizzBuzzDecorator;

class FizzBuzzDecoratorTest extends FizzBuzzTest
{
    protected $fb;

    protected function setUp()
    {
        $this->fb = new FizzBuzzDecorator(new FizzBuzz());
    }

    public function testReturnsFizzWhenNumberContainsThree() {
        $this->assertEquals('Fizz', $this->fb->of(13));
    }

    public function testReturnsBuzzWhenNumberContainsFive() {
        $this->assertEquals('Buzz', $this->fb->of(52));
    }

    public function testReturnsFizzBuzzWhenNumberContainsFiveAndThree()
    {
        $this->assertEquals('FizzBuzz', $this->fb->of(53));
    }

    public function testReturnsFizzBuzzWhenNumberContainsFiveAndIsMultipleOfThree()
    {
        $this->assertEquals('FizzBuzz', $this->fb->of(51));
    }

    public function testReturnsFizzBuzzWhenNumberContainsThreeAndIsMultipleOfFive()
    {
        $this->assertEquals('FizzBuzz', $this->fb->of(35));
    }
}