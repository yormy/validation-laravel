<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

class IsNull extends Rule
{
    /**
     * Determine if the validation rule passes.
     */
    public function passes(string $attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        return $value === null;
    }
}
