<?php

namespace Kata;


class FizzBuzz2 extends FizzBuzz
{
    public function of(int $number)
    {
        $parent = parent::of($number);

        if (strstr($parent, '3') !== false) {
            return self::FIZZ;
        }
        return $parent;
    }
}
