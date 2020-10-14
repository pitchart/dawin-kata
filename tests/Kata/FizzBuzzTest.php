<?php

namespace Tests\Kata;

use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testDefault()
    {
        $fb = new FizzBuzz();
        $this->assertEquals(1, $fb->of(1));
    }
}
