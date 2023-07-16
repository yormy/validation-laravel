<?php

namespace Yormy\ValidationLaravel\Exceptions;

use Exception;

class SizeNotAllowedException extends Exception
{
    public function __construct($filename)
    {
        $maxAllowdSize = config('validation-laravel.upload.max_file_size_kb');
        parent::__construct("$filename is too large (max $maxAllowdSize kb");
    }
}
