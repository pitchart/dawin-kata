<?php


namespace Kata;


class FizzBuzz
{
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    public function of(int $number)
    {
        $return = '';
        if ($number % 3 == 0) {
            $return .= self::FIZZ;
        }

        if ($number % 5 == 0) {
            $return .= self::BUZZ;
        }

        return $return != '' ? $return : $number;
    }
}
