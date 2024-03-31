<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

class OddNumber extends Rule
{
    /**
     * Determine if the validation rule passes.
     */
    public function passes($attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        return (int) $value % 2 === 1;
    }
}
