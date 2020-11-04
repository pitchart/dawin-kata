<?php

namespace Kata;


class FizzBuzz2 extends FizzBuzz
{
    public function isFizz($number)
    {
        return parent::isFizz($number) || strstr($number, '3') !== false;
    }

    public function isBuzz($number)
    {
        return parent::isBuzz($number) || strstr($number, '5') !== false;
    }
}
