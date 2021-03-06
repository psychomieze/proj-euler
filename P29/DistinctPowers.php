<?php
namespace P29;
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 12.02.15
 * Time: 09:33
 */

class DistinctPowers extends \Library\Timer {

	public function getCountOfDistinctTerms($min, $max) {
		$terms = [];
		for($i=$min; $i<=$max; $i++) {
			for($j=$min; $j<=$max; $j++) {
				$terms[bcpow($i, $j)] = true;
			}
		}
		return count($terms);
	}
}