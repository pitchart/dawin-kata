<?php


namespace Kata;


class FizzBuzz
{
    public function of(int $number)
    {
        if ($number % 3 == 0) {
            return 'Fizz';
        }
        else {
            if ($number % 5 == 0) {
                return 'Buzz';
            }
            else {
                return $number;
            }
        }
    }
}