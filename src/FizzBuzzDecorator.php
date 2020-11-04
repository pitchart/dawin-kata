<?php

namespace Kata;

/**
 * Class FizzBuzzDecorator
 * @package Kata
 */
class FizzBuzzDecorator implements FizzBuzzInterface
{
    private $fizzBuzz;

    /**
     * FizzBuzzDecorator constructor.
     * @param FizzBuzz $fizzBuzz
     */
    public function __construct(FizzBuzz $fizzBuzz)
    {
        $this->fizzBuzz = $fizzBuzz;
    }


    /**
     * @inheritDoc
     */
    public function of(int $number)
    {
        $return = '';
        if ($this->isFizz($number)) {
            $return .= FizzBuzz::FIZZ;
        }

        if ($this->isBuzz($number)) {
            $return .= FizzBuzz::BUZZ;
        }

        return $return != '' ? $return : $number;
    }

    /**
     * @inheritDoc
     */
    public function isFizz($number)
    {
        return $this->fizzBuzz->isFizz($number) || strstr($number, '3') !== false;
    }

    /**
     * @inheritDoc
     */
    public function isBuzz($number)
    {
        return $this->fizzBuzz->isBuzz($number) || strstr($number, '5') !== false;
    }
}