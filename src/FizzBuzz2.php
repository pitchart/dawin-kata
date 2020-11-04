<?php

namespace Kata;


class FizzBuzz2 extends FizzBuzz
{
    public function of(int $number)
    {
        $parent = parent::of($number);

        if (strstr($parent, '3') !== false && strstr($parent, '5') !== false) {
            return self::FIZZ . self::BUZZ;
        }
        if (strstr($parent, '3') !== false) {
            return self::FIZZ;
        }
        if (strstr($parent, '5') !== false) {
            return self::BUZZ;
        }

        return $parent;
    }
}
