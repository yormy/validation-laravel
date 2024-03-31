<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Exceptions;

use Exception;

class InvalidImageException extends Exception
{
    /**
     * InvalidValueException constructor.
     */
    public function __construct($value)
    {
        parent::__construct($value);
    }
}
