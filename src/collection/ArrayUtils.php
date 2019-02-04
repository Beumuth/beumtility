<?php

namespace Beumuth\Beumtil\Collection;	//Collection, because 'Array' is not allowed in namespace

class ArrayUtils {

	/**
	 * Get the values of an array at multiple indices. If a particular key in the given $needles array has no value,
	 * then the returned array will also have no value for that key.
	 * @param array $haystack The array to search for values in
	 * @param mixed[] $needles The indices of the $haystack
	 * @return array An array of values, with integer indices, in the same order of the given $needles.
	 */
	public static function valuesAtIndices(array $haystack, array $needles): array {
		$response = [];
		foreach($needles as $needle) {
			if(array_key_exists($needle, $haystack)) {
				array_push($response, $haystack[$needle]);
			}
		}
		return $response;
	}
}