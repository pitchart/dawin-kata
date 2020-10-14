<?php

namespace Tests\Kata;

use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testLeast()
    {
        $fb = new FizzBuzz();
        $this->assertEquals(1, $fb->of(1));
    }

    public function testMost()
    {
        $fb = new FizzBuzz();
        $this->assertEquals(98, $fb->of(98));
    }
}
