<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

/**
 * Allow only Alpha (including umlaut Ü etc and special chars) , dashes whitespace
 * Class AlphaDashWhitespace
 */
class AlphaDashWhitespace extends Rule
{
    /**
     * Determine if the validation rule passes.
     */
    public function passes($attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        if (! is_string($value) && ! is_numeric($value)) {
            return false;
        }

        return preg_match("/^[\s\pL\pM\pN'_-]+$/u", (string) $value) > 0;
    }
}
