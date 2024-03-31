<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Exceptions;

use Exception;

class NullByteFoundException extends Exception
{
    public function __construct($filename)
    {
        //SECURITY NOTE : This is serious, Best to block the ip immediately
        parent::__construct("{$filename} null byte injection");
    }
}
