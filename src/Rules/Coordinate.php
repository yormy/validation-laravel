<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use function explode;
use function preg_match;
use function trim;

class Coordinate extends Rule
{
    /**
     * Determine if the validation rule passes.
     * Validates a lat/lng co ordinate like "47.1,179.1".
     */
    public function passes(string $attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        $parts = explode(',', $value);

        /** @psalm-suppress TypeDoesNotContainType */
        if (! count($parts) || ! isset($parts[1])) {
            return false;
        }

        return preg_match(
            '/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?),[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/',
            trim($parts[0]).','.trim($parts[1])
        ) !== 0;
    }
}
