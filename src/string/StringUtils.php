<?php

namespace Beumuth\Beumtil\String;

class StringUtils {
	/**
	 * Determines if the $haystack begins with the $needle
	 * @param string $haystack
	 * @param string $needle
	 * @return boolean True if starts with, otherwise false
	 */
	public static function startsWith($haystack, $needle): bool {
		//Credit: https://stackoverflow.com/a/834355/3816779
		$length = strlen($needle);
		return (substr($haystack, 0, $length) === $needle);
	}

	/**
	 * Determines if the haystack ends with the needle
	 * @param string $haystack
	 * @param string $needle
	 * @return bool True if ends with, otherwise false
	 */
	public static function endsWith(string $haystack, string $needle): bool
	{
		//Credit: https://stackoverflow.com/a/834355/3816779
		$length = strlen($needle);
		if ($length == 0) {
			return true;
		}

		return (substr($haystack, -$length) === $needle);
	}
}