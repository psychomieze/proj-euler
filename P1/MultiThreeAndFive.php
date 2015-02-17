<?php
namespace P1;
/**
 * If we list all the natural numbers below 10 that are
 * multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
 *
 * Find the sum of all the multiples of 3 or 5 below 1000.
 */


class MultiThreeAndFive extends \Library\Timer {

    public function sumOfMultiples($max){
        return array_sum(array_filter(range(0, $max), function($item) {
            return ($item % 3 === 0) || ($item % 5 === 0) ? true : false;
        }));
    }
}