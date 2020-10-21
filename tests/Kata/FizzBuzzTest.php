<?php

namespace Tests\Kata;

use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @var FizzBuzz
     */
    protected $fb;

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

    /**
     * @param $number
     * @dataProvider multiplesOfFiveNumberProvider
     */
    public function testReturnsBuzzForMultiplesOfFiveFor($number)
    {
        $this->assertEquals('Buzz', $this->fb->of($number));
    }

	public function testReturnsFizzBuzzForMultiplesOfFiveAndThreeFor()
	{
		$this->assertEquals('FizzBuzz', $this->fb->of(15));
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
            'max limit 99' => [99],
        ];
    }

    public function multiplesOfFiveNumberProvider()
    {
        yield from [
            'min limit 5' => [5],
            'max limit 100' => [100]
        ];
    }
}
