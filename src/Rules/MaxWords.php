<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use Yormy\ValidationLaravel\Rules\Exceptions\RuleSetupException;

class MaxWords extends Rule
{
    private $maxWords = null;

    /**
     * Determine if the validation rule passes.
     */
    public function passes($attribute, $value): bool
    {
        $this->setAttribute($attribute);

        if ($this->maxWords === null || $this->maxWords === 0) {
            throw new RuleSetupException('use ->max() to specify the number of words to allow');
        }

        return count(preg_split('~[^\p{L}\p{N}\']+~u', $value)) <= $this->maxWords;
    }

    public function max(int $maxWords): self
    {
        $this->maxWords = $maxWords;

        return $this;
    }

    public function message(): string
    {
        $key = 'core::validation.'.$this->getMessageKey();

        return (string) __(
            $key,
            [
                'attribute' => $this->getAttribute(),
                'max' => $this->maxWords,
            ]
        );
    }
}
