<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use Exception;
use Illuminate\Contracts\Validation\ValidationRule;

abstract class BaseValidationRule implements ValidationRule
{
    public function __construct(private ?Exception $exception = null)
    {
        // ...
    }
}
