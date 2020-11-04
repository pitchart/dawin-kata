<?php

namespace Kata;

interface FizzBuzzInterface
{
    /**
     * @param int $number
     * @return int|string
     */
    public function of(int $number);

    /**
     * @param int $number
     * @return bool
     */
    public function isFizz($number);

    /**
     * @param int $number
     * @return bool
     */
    public function isBuzz($number);
}