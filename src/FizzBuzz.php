<?php


namespace Kata;


class FizzBuzz
{
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    public function of(int $number)
    {
        $return = '';
        if ($this->isFizz($number)) {
            $return .= self::FIZZ;
        }

        if ($this->isBuzz($number)) {
            $return .= self::BUZZ;
        }

        return $return != '' ? $return : $number;
    }

    public function isFizz($number)
    {
        return $number % 3 == 0;
    }

    public function isBuzz($number)
    {
        return $number % 5 == 0;
    }
}
