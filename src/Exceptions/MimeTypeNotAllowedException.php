<?php

namespace Yormy\ValidationLaravel\Exceptions;

use Exception;

class MimeTypeNotAllowedException extends Exception
{
    public function __construct($filename, $mimetype)
    {
        parent::__construct("$mimetype is not allowed for file: $filename");
    }
}
