<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

class Percentage extends Rule
{
    /**
     * Determine if the validation rule passes.
     */
    public function passes($attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        if (! is_numeric($value)) {
            return false;
        }

        $intValue = (int) $value;

        return $intValue >= 0 && $intValue <= 100;
    }
}
