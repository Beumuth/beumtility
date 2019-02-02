<?php

namespace Beumuth\Beumtil\Tests\String;

use Beumuth\Beumtil\String\StringUtils;
use PHPUnit\Framework\TestCase;

class StringUtilsTest extends TestCase {
	/**
	 * @test
	 */
	public function doesNotStartWithShouldReturnFalse(): void {
		//Single character
		$this->assertFalse(StringUtils::startsWith("haystack", "p"));
		//Multiple characters
		$this->assertFalse(StringUtils::startsWith("haystack", "pe"));
		//Longer than haystack
		$this->assertFalse(StringUtils::startsWith("haystack", "longneedle"));
		//Haystack empty string
		$this->assertFalse(StringUtils::startsWith("", "needle"));
	}

	/**
	 * @test
	 */
	public function doesStartWithShouldReturnTrue(): void {
		//Empty string
		$this->assertTrue(StringUtils::startsWith("haystack", ""));
		//Single character
		$this->assertTrue(StringUtils::startsWith("haystack", "h"));
		//Multiple characters
		$this->assertTrue(StringUtils::startsWith("haystack", "hay"));
		//Full string
		$this->assertTrue(StringUtils::startsWith("haystack", "haystack"));
	}

	/**
	 * @test
	 */
	public function doesNotEndWithShouldReturnFalse(): void {
		//Single character
		$this->assertFalse(StringUtils::endsWith("haystack", "c"));
		//Multiple characters
		$this->assertFalse(StringUtils::endsWith("haystack", "cc"));
		//Longer than haystack
		$this->assertFalse(StringUtils::endsWith("haystack", "longneedle"));
		//Haystack empty string
		$this->assertFalse(StringUtils::endsWith("", "needle"));
	}

	/**
	 * @test
	 */
	public function doesEndWithShouldReturnTrue(): void {
		//Empty string
		$this->assertTrue(StringUtils::endsWith("haystack", ""));
		//Single character
		$this->assertTrue(StringUtils::endsWith("haystack", "k"));
		//Multiple characters
		$this->assertTrue(StringUtils::endsWith("haystack", "ack"));
		//Full string
		$this->assertTrue(StringUtils::endsWith("haystack", "haystack"));
	}
}