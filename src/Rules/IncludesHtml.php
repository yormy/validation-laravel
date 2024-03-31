<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use function strip_tags;

class IncludesHtml extends Rule
{
    public function passes(string $attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        return strip_tags((string) $value) !== $value;
    }
}
