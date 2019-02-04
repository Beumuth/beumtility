<?php

namespace Beumuth\Beumtil\Collection;

use PHPUnit\Framework\TestCase;

class ArrayUtilsTest extends TestCase {

	private $numericalHaystack = [
		false,
		"one",
		2,
		3.0
	];
	private $keyedHaystack = [
		"zero" 	=> false,
		"one" 	=> "one",
		"two" 	=> 2,
		"three" => 3.0
	];

	/**
	 * @test
	 */
	public function emptyNeedlesShouldReturnEmptyArray() {
		$this->assertEquals(
			ArrayUtils::valuesAtIndices($this->numericalHaystack, []),
			[]
		);
		$this->assertEquals(
			ArrayUtils::valuesAtIndices($this->keyedHaystack, []),
			[]
		);
	}

	/**
	 * @test
	 */
	public function oneMatchingNeedleShouldReturnCorrespondingValue() {
		$this->assertEquals(
			ArrayUtils::valuesAtIndices($this->numericalHaystack, [1]),
			["one"]
		);
		$this->assertEquals(
			ArrayUtils::valuesAtIndices($this->keyedHaystack, ["one"]),
			["one"]
		);
	}

	/**
	 * @test
	 */
	public function oneNonMatchingNeedleShouldReturnEmptyArray() {
		$this->assertEquals(
			ArrayUtils::valuesAtIndices($this->numericalHaystack, [4]),
			[]
		);
		$this->assertEquals(
			ArrayUtils::valuesAtIndices($this->keyedHaystack, ["four"]),
			[]
		);
	}

	/**
	 * @test
	 */
	public function someMatchingNeedlesShouldReturnCorrespondingValues() {
		$this->assertEquals(
			ArrayUtils::valuesAtIndices($this->numericalHaystack, [2, 3, 5]),
			[2, 3.0]
		);
		$this->assertEquals(
			ArrayUtils::valuesAtIndices($this->keyedHaystack, ["two", "three", "five"]),
			[2, 3.0]
		);
	}

	/**
	 * @test
	 */
	public function multipleNonMatchingNeedlesShouldReturnEmptyArray() {
		$this->assertEquals(
			ArrayUtils::valuesAtIndices($this->numericalHaystack, [4, 5]),
			[]
		);
		$this->assertEquals(
			ArrayUtils::valuesAtIndices($this->keyedHaystack, ["four", "five"]),
			[]
		);
	}

	/**
	 * @test
	 */
	public function haystackIndicesAsNeedlesShouldReturnCorrespondingValues() {
		$this->assertEquals(
			ArrayUtils::valuesAtIndices($this->numericalHaystack, array_keys($this->numericalHaystack)),
			$this->numericalHaystack
		);
		$this->assertEquals(
			ArrayUtils::valuesAtIndices($this->keyedHaystack, array_keys($this->keyedHaystack)),
			array_values($this->keyedHaystack)
		);
	}
}