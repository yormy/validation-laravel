<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use Yormy\ValidationLaravel\Rules\Exceptions\RuleSetupException;

class StringNotContains extends Rule
{
    protected $phrases = [];

    /**
     * Determine if the validation rule passes.
     */
    public function passes(string $attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        if ($this->phrases === []) {
            throw new RuleSetupException('Zero phrases have been whitelisted using the "phrases()" method');
        }

        return preg_match('('.implode('|', $this->phrases).')', $value) === 0;
    }

    public function phrases(array $phrases): self
    {
        $this->phrases = $phrases;

        return $this;
    }

    public function message(): string
    {
        $key = 'core::validation.'.$this->getMessageKey();

        return (string) __(
            $key,
            [
                'attribute' => $this->getAttribute(),
                'phrases' => implode(
                    ', ',
                    array_map(
                        function ($phrases) {
                            return "'".$phrases."'";
                        },
                        $this->phrases
                    )
                ),
            ]
        );
    }
}
