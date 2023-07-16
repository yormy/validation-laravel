<?php

namespace Yormy\ValidationLaravel\Exceptions;

use Exception;
use Yormy\ValidationLaravel\Observers\Events\XidValidationFailedEvent;

class XidNotFoundException extends Exception
{
    public function __construct($value = '')
    {
        event(new XidValidationFailedEvent()); // When the xid is invalid this is probably a hacking attempt

        parent::__construct($value);
    }
}
