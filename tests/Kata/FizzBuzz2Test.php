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
}
