<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use function preg_match;

class NoWhitespace extends Rule
{
    /**
     * @param  string  $attribute
     * @param  mixed  $value
     */
    public function passes($attribute, $value): bool
    {
        $this->setAttribute($attribute);

        return preg_match('/\s/', $value) === 0;
    }
}
