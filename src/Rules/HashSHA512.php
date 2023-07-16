<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

class HashSHA512 extends Rule
{
    /**
     * Determine if the validation rule passes.
     *
     **/
    public function passes($attribute, $value): bool
    {
        $this->setAttribute($attribute);

        return preg_match(
            '/^[a-f0-9]{128}$/',
            $value
        ) > 0;
    }
}
