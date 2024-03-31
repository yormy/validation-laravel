<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

/**
 * Allow only Alpha (including umlaut Ü etc and special chars) , dashes whitespace
 * Class AlphaDashWhitespace
 */
class NameWithSymbols extends Rule
{
    /**
     * Determine if the validation rule passes.
     */
    public function passes(string $attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        if (! is_string($value) && ! is_numeric($value)) {
            return false;
        }

        return preg_match('/^[\s\pL\pM\pN-!#@$%^&*()_+|~=`{}\[\]\\:";\'<>?,.\/]+$/u', (string) $value) > 0;
    }
}
