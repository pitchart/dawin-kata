<?php


namespace Kata;


class FizzBuzz
{
    public function of(int $number)
    {
        if ($number == 3) {
            return 'Fizz';
        }
        return $number;
    }
}