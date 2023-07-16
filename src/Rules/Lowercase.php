<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use function is_string;
use function mb_strtolower;

class Lowercase extends Rule
{
    /**
     * @param  string  $attribute
    <?php declare(strict_types = 1);  * @param  mixed  $value
     */
    public function passes($attribute, $value): bool
    {
        $this->setAttribute($attribute);

        if (! is_string($value)) {
            return false;
        }

        return mb_strtolower($value, 'UTF-8') === $value;
    }
}
