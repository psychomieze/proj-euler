<?php

namespace P10;

/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 05.02.15
 * Time: 07:44
 */
class SumOfPrimes extends \Library\Timer
{

    public function getSumOfPrimes($max)
    {
        $sum = 2;
        for ($i = 3; $i <= $max; $i += 2) {
            $sum += \Library\PrimeNumbers::isPrime($i) ? $i : 0;
        }
        return $sum;
    }
}
