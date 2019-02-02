<?php

namespace Beumuth\Beumtil\Optional;

class EmptyOptionalException extends \RuntimeException {
	function __construct() {
		parent::__construct("Optional is empty");
	}
}
