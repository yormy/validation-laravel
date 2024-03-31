<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

class ValidPrice extends Rule
{
    /**
     * Determine if the validation rule passes.
     */
    public function passes(string $attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        $regex = '/^[\d]+[\.][\d]{2}$/';

        return preg_match($regex, $value) > 0;
    }
}
