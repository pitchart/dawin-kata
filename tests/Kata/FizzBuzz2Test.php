<?php

namespace Tests\Kata;

use Kata\FizzBuzz2;
use PHPUnit\Framework\TestCase;

class FizzBuzz2Test extends FizzBuzzTest
{
    protected $fb;

    protected function setUp()
    {
        $this->fb = new FizzBuzz2();
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
