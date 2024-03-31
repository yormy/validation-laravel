<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use function __;
use function mb_strlen;
use function preg_match_all;

/**
 * Class StrongPassword
 * - (new StrongPassword()) : 8 chars, Uppercase + lowercase + number
 * - (new StrongPassword())->forceUppercaseCharacters()->forceLowercaseCharacters(false)->forceNumbers()->forceSpecialCharacters()->withSpecialCharacters('£$*%^'),
 */
class StrongPassword extends Rule
{
    protected int $minCharacters = 8;

    protected string $specialCharacters = '!@#$%^&*()\-_=+{};:,<."£~?|>';

    protected bool $mustIncludeUppercaseCharacters = true;

    protected bool $mustIncludeLowercaseCharacters = true;

    protected bool $mustIncludeSpecialCharacters = false;

    protected bool $mustIncludeNumbers = true;

    public function passes($attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        if ($this->mustIncludeUppercaseCharacters &&
            preg_match_all('/[A-Z]/', $value, $o) === 0
        ) {
            return false;
        }

        if ($this->mustIncludeLowercaseCharacters &&
            preg_match_all('/[a-z]/', $value, $o) === 0
        ) {
            return false;
        }

        if ($this->mustIncludeSpecialCharacters &&
            preg_match_all('/['.$this->specialCharacters.']/', $value, $o) === 0
        ) {
            return false;
        }

        if ($this->mustIncludeNumbers &&
            preg_match_all('/[0-9]/', $value, $o) === 0
        ) {
            return false;
        }

        if (mb_strlen($value, 'UTF-8') < $this->minCharacters) {
            return false;
        }

        return true;
    }

    public function min(int $min): self
    {
        $this->minCharacters = $min;

        return $this;
    }

    /**
     * @return $this
     */
    public function forceUppercaseCharacters(bool $flag = true): self
    {
        $this->mustIncludeUppercaseCharacters = $flag;

        return $this;
    }

    public function forceLowercaseCharacters(bool $flag = true): self
    {
        $this->mustIncludeLowercaseCharacters = $flag;

        return $this;
    }

    public function forceNumbers(bool $flag = true): self
    {
        $this->mustIncludeNumbers = $flag;

        return $this;
    }

    public function forceSpecialCharacters(bool $flag = true): self
    {
        $this->mustIncludeSpecialCharacters = $flag;

        return $this;
    }

    public function withSpecialCharacters(string $characters): self
    {
        $this->forceSpecialCharacters();
        $this->specialCharacters = $characters;

        return $this;
    }

    public function reset(): self
    {
        $this->minCharacters = 8;
        $this->mustIncludeSpecialCharacters = false;
        $this->mustIncludeNumbers = false;
        $this->mustIncludeLowercaseCharacters = false;
        $this->mustIncludeUppercaseCharacters = false;

        return $this;
    }

    public function message(): string
    {
        $key = 'core::validation.'.$this->getMessageKey();

        $message = [];

        $message[] = (string) __(
            $key.'.base',
            [
                'attribute' => $this->getAttribute(),
            ]
        );

        if ($this->minCharacters > 0) {
            $message[] = (string) __(
                $key.'.min',
                [
                    'length' => $this->minCharacters,
                ]
            );
        }

        if ($this->mustIncludeUppercaseCharacters > 0) {
            $message[] = (string) __($key.'.uppercase');
        }

        if ($this->mustIncludeLowercaseCharacters > 0) {
            $message[] = (string) __($key.'.lowercase');
        }

        if ($this->mustIncludeNumbers > 0) {
            $message[] = (string) __($key.'.numbers');
        }

        if ($this->mustIncludeSpecialCharacters > 0) {
            $message[] = (string) __(
                $key.'.special',
                [
                    'characters' => $this->specialCharacters,
                ]
            );
        }

        return implode(', ', $message);
    }
}
