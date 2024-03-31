<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Exceptions;

use Exception;

class ExtensionInvalidException extends Exception
{
    public function __construct($filename)
    {
        parent::__construct("{$filename} is has an incorrect extension, please rename the file");
    }
}
