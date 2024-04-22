<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use Closure;
use Yormy\ValidationLaravel\Facades\DisposableEmail;

class EmailNotDisposable extends BaseValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (DisposableEmail::isDisposable($value)) {
            $fail(__('validation::rule.email.banned', ['attribute' => $attribute, 'value' => $value]));
        }
    }
}
