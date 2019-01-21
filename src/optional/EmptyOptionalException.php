<?php

namespace Beumuth\Beumtil\Optional;

class EmptyOptionalException extends \Exception {
	function __construct() {
		parent::__construct("Optional is empty");
	}
}
