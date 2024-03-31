<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use function is_string;
use function mb_strtoupper;

class Uppercase extends Rule
{
    public function passes($attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        if (! is_string($value)) {
            return false;
        }

        return mb_strtoupper($value, 'UTF-8') === $value;
    }
}
