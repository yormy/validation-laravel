<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

class IsNull extends Rule
{
    /**
     * Determine if the validation rule passes.
     */
    public function passes($attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        return $value === null;
    }
}
