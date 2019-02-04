<?php

namespace Beumuth\Beumtil\Integer;

class IntegerUtils {
	/**
	 * Get all integers within a range.
	 * @param int $start The starting integer of the range (inclusive)
	 * @param int $length The length of the range
	 * @return array The range of integers
	 */
	public static function inRange(int $start, int $length): array {
		$integers = [];
		for($i = $start; $i < $start+$length; ++$i) {
			array_push($integers, $i);
		}
		return $integers;
	}
}