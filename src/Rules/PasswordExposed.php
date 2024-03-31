<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use DivineOmega\PasswordExposed\Enums\PasswordStatus;
use DivineOmega\PasswordExposed\PasswordExposedChecker;
use Yormy\ValidationLaravel\Rules\Factories\PasswordExposedCheckerFactory;

/**
 * Check if password is exposed and listed in HaveIBeenPowned
 * Class PasswordExposed
 */
class PasswordExposed extends Rule
{
    private PasswordExposedChecker $passwordExposedChecker;

    private string $message = 'The :attribute has been exposed in a data breach.';

    /**
     * PasswordExposed constructor.
     */
    public function __construct(?PasswordExposedChecker $passwordExposedChecker = null)
    {
        if (! $passwordExposedChecker) {
            $factory = new PasswordExposedCheckerFactory();
            $passwordExposedChecker = $factory->instance();
        }

        $this->passwordExposedChecker = $passwordExposedChecker;
    }

    /**
     * Determine if the validation rule passes.
     */
    public function passes(string $attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        $passwordStatus = $this->passwordExposedChecker->passwordExposed($value);

        return $passwordStatus !== PasswordStatus::EXPOSED;
    }
}
