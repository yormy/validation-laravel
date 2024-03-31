<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

class CustomMessage extends Rule
{
    private $errorMessageKey;

    public function __construct(string $errorMessageKey)
    {
        $this->errorMessageKey = $errorMessageKey;
    }

    public function passes($attribute, $value): bool
    {
        $this->setAttribute($attribute);

        return false;
    }

    public function message(): string
    {
        return (string) __(
            $this->errorMessageKey,
            [
                'attribute' => $this->getAttribute(),
            ]
        );
    }
}
