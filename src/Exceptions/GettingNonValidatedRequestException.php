<?php

namespace Yormy\ValidationLaravel\Exceptions;

use Exception;

class GettingNonValidatedRequestException extends Exception
{
    /**
     * InvalidValueException constructor.
     * @param $value
     */
    public function __construct($value)
    {
        parent::__construct("The request variable is not validated by the FormRequest rules :". $value);
    }
}
