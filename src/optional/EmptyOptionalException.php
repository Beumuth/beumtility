<?php

namespace Beumuth\Beumtil\Optional;

class EmptyOptionalException extends \Exception {
	function __construct(): self {
		parent::__construct("Optional is empty");
	}
}
