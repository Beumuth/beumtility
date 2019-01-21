<?php

namespace Beumuth\Beumtil\Tests\Optional;

require_once(__DIR__ . "/../../vendor/autoload.php");

use \Beumuth\Beumtil\Optional\Optional;
use \PHPUnit\Framework\TestCase;

class OptionalTest extends TestCase {
	
	/**
	 * @test
	 */
	public function hollowIsHollowShouldReturnTrue() {
		$this->assertTrue(Optional::hollow()->isHollow());
	}
	
	/**
	 * @test
	 * @expectedException \Beumuth\Beumtil\Optional\EmptyOptionalException
	 */
	public function hollowGetShouldThrowEmptyOptionalException() {
		Optional::hollow()->get();
	}
	
	/**
	 * @test
	 */
	public function hollowOrElseShouldReturnElse() {
		$this->assertEquals(5, Optional::hollow()->orElse(5));
	}
	
	/**
	 * @test
	 */
	public function ofNonNullIsHollowShouldReturnFalse() {
		$this->assertFalse(Optional::of(5)->isHollow());
		$this->assertFalse(Optional::of("5")->isHollow());
		$this->assertFalse(Optional::of(true)->isHollow());
		$this->assertFalse(Optional::of(false)->isHollow());
	}
	
	/**
	 * @test
	 */
	public function ofNonNullGetShouldReturnObject() {
		$this->assertEquals(5,		Optional::of(5)->get());
		$this->assertEquals("5",	Optional::of("5")->get());
		$this->assertEquals(true,	Optional::of(true)->get());
		$this->assertEquals(false,	Optional::of(false)->get());
	}
	
	/**
	 * @test
	 */
	public function ofNonNullOrElseShouldReturnObject() {
		$this->assertEquals(5,		Optional::of(5)->orElse(6));
		$this->assertEquals("5",	Optional::of("5")->orElse("6"));
		$this->assertEquals(true,	Optional::of(true)->orElse(false));
		$this->assertEquals(false,	Optional::of(false)->orElse(true));
	}
	
	/**
	 * @test
	 * @expectedException InvalidArgumentException
	 */
	public function ofNullShouldThrowInvalidArgumentException() {
		Optional::of(null);
	}
	
	/**
	 * @test
	 */
	public function ofNullableWithNonNullIsHollowShouldReturnFalse() {
		$this->assertFalse(Optional::ofNullable(5)->isHollow());
		$this->assertFalse(Optional::ofNullable("5")->isHollow());
		$this->assertFalse(Optional::ofNullable(true)->isHollow());
		$this->assertFalse(Optional::ofNullable(false)->isHollow());
	}
	
	/**
	 * @test
	 */
	public function ofNullableWithNonNullGetShouldReturnObject() {
		$this->assertEquals(5,		Optional::ofNullable(5)->get());
		$this->assertEquals("5",	Optional::ofNullable("5")->get());
		$this->assertEquals(true,	Optional::ofNullable(true)->get());
		$this->assertEquals(false,	Optional::ofNullable(false)->get());
	}
	
	/**
	 * @test
	 */
	public function ofNullableWithNonNullOrElseShouldReturnObject() {
		$this->assertEquals(5,		Optional::ofNullable(5)->orElse(6));
		$this->assertEquals("5",	Optional::ofNullable("5")->orElse("6"));
		$this->assertEquals(true,	Optional::ofNullable(true)->orElse(false));
		$this->assertEquals(false,	Optional::ofNullable(false)->orElse(true));
	}
	
	/**
	 * @test
	 */
	public function ofNullableWithNullIsHollowShouldReturnTrue() {
		$this->assertTrue(Optional::ofNullable(null)->isHollow());
	}
	
	/**
	 * @test
	 * @expectedException \Beumuth\Beumtil\Optional\EmptyOptionalException
	 */
	public function ofNullableWithNullGetShouldThrowEmptyOptionalException() {
		Optional::ofNullable(null)->get();
	}
	
	/**
	 * @test
	 */
	public function ofNullableWithNullOrElseShouldReturnElse() {
		$this->assertEquals(6, Optional::ofNullable(null)->orElse(6));
	}
}