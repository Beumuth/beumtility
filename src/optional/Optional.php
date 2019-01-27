<?php

namespace Beumuth\Beumtil\Optional;

class Optional {
	
	private $object;
	
	function __construct(object $object) : self {
		$this->object = $object;
	}
	
	/**
	 * @return Optional An Optional with a null underlying $object
	 */
	public static function hollow(): Optional {
		return new Optional(null);
	}
	
	/**
	 * Returns an optional with the given $object. If $object is null, throws
	 * an InvalidArgumentException.
	 * @throws \InvalidArgumentException if $object is null
	 */
	public static function of(object $object): Optional {
		if(is_null($object)) {
			throw new \InvalidArgumentException("Given object cannot be null");
		}
		return new Optional($object);
	}
	
	/**
	 * Returns an optional with the given $object. If $object is null,
	 * returns an empty optional.
	 */
	public static function ofNullable(object $object): Optional {
		return new Optional($object);
	}
	
	/**
	 * Get the underlying $object, otherwise throw EmptyOptionalException
	 * @throws EmptyOptionalException if this Optional is empty
	 */
	public function get(): object {
		if($this->isHollow()){
			throw new EmptyOptionalException();
		}
		return $this->object;
	}
	
	/**
	 * Determines if the underlying $object is null
	 * @return bool
	 */
	public function isHollow(): bool {
		return is_null($this->object);
	}
	
	/**
	 * @param object $other The variable to return if this Optional is hollow.
	 * @return mixed The underlying $object if not null, otherwise the given
	 *				 $other
	 */
	public function orElse(object $other): object {
		if(is_null($this->object)) {
			return $other;
		}
		return $this->object;
	}
}
