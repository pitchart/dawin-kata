<?php

namespace Tests\Kata;

use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @var FizzBuzz
     */
    private $fb;

    protected function setUp()
    {
        $this->fb = new FizzBuzz();
    }

    /**
     * @param $number
     * @dataProvider classicalNumberProvider
     */
    public function testReturnsSameNumberForClassicalNumbersFor($number)
    {
        $this->assertEquals($number, $this->fb->of($number));
    }

    /**
     * @param $number
     * @dataProvider multiplesOfThreeNumberProvider
     */
    public function testReturnsFizzForMultiplesOfThreeFor($number)
    {
        $this->assertEquals('Fizz', $this->fb->of($number));
    }

    public function classicalNumberProvider()
    {
        yield from [
            'min limit 1' => [1],
            'max limit 98' => [98],
        ];
    }

    public function multiplesOfThreeNumberProvider()
    {
        yield from [
            'min limit 3' => [3],
            //'max limit 99' => [99],
        ];
    }
}
