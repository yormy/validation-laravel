<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Exceptions;

use Exception;

class ExtensionInconsistentException extends Exception
{
    public function __construct($filename)
    {
        parent::__construct("{$filename} is inconsistent extension");
    }
}
