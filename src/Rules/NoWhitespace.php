<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use function preg_match;

class NoWhitespace extends Rule
{
    public function passes($attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        return preg_match('/\s/', $value) === 0;
    }
}
