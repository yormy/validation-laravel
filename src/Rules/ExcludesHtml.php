<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use function strip_tags;

class ExcludesHtml extends Rule
{
    public function passes($attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        return strip_tags((string) $value) === $value;
    }
}
