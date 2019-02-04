<?php

namespace Beumuth\Beumtil\Integer;

use PHPUnit\Framework\TestCase;

class IntegerUtilsTest extends TestCase  {

	/**
	 * @test
	 */
	//Only one test seems necessary...
	public function inRangeTest() {
		$this->assertEquals([-2, -1, 0, 1, 2, 3], IntegerUtils::inRange(-2, 6));
	}
}