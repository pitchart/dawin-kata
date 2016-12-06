<?php
namespace Fizzbuzz;
class Fizzbuzz {
    function process($number) {
        $ret = "";
        if($number%3==0)
            $ret.= "Fizz";
        if($number%5==0)
            $ret .= "Buzz";
        return $ret;
    }
}