<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use Yormy\ValidationLaravel\Rules\Exceptions\RuleSetupException;

/**
 * https://github.com/validation-laravel-rules/phone
 * Class Phone
 */
class Phone extends Rule
{
    public const FORMAT_DIGITS = 1;

    public const FORMAT_E123 = 2;

    public const FORMAT_E164 = 3;

    public const FORMAT_NANP = 4;

    private $format = self::FORMAT_E164;

    /**
     * Determine if the validation rule passes.
     */
    public function passes(string $attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        switch ($this->format) {
            case static::FORMAT_DIGITS:
                return $this->isPhone($value);
            case static::FORMAT_E123:
                return $this->isE123($value);
            case static::FORMAT_E164:
                return $this->isE164($value);
            case static::FORMAT_NANP:
                return $this->isNANP($value);
            default:
                throw new RuleSetupException('set the format of verification (phone, e123, 164, nanp)');
        }
    }

    public function digits(): self
    {
        $this->format = static::FORMAT_DIGITS;

        return $this;
    }

    public function e123(): self
    {
        $this->format = static::FORMAT_E123;

        return $this;
    }

    public function e164(): self
    {
        $this->format = static::FORMAT_E164;

        return $this;
    }

    public function nanp(): self
    {
        $this->format = static::FORMAT_NANP;

        return $this;
    }

    public function message(): string
    {
        $key = 'validation.'.$this->getMessageKey();

        switch ($this->format) {
            case static::FORMAT_DIGITS:
                $format = '0123956789';

                break;
            case static::FORMAT_E123:
                $format = 'E123';

                break;
            case static::FORMAT_E164:
                $format = 'E164';

                break;
            case static::FORMAT_NANP:
                $format = 'NANP';

                break;
            default:
                $format = 'E164';

                break;
        }

        return (string) __(
            $key,
            [
                'attribute' => $this->getAttribute(),
                'format' => $format,
                'example' => $this->example(),
            ]
        );
    }

    /**
     * Checks through all validation methods to verify it is in a
     * phone number format of some type
     *
     * @param  string  $value  The phone number to check
     *
     * @return bool is it correct format?
     */
    protected function isPhone(string $value): bool
    {
        return $this->isE123($value) || $this->isE164($value) || $this->isNANP($value) || $this->isDigits($value);
    }

    protected function isDigits(string $value): bool
    {
        $conditions = [];
        $conditions[] = strlen($value) >= 10;
        $conditions[] = strlen($value) <= 16;
        $conditions[] = preg_match("/[^\d]/i", $value) === 0;

        return (bool) array_product($conditions);
    }

    /**
     * Format example +22 555 555 1234, (607) 555 1234, (022607) 555 1234
     */
    protected function isE123($value): bool
    {
        return preg_match('/^(?:\((\+?\d+)?\)|\+?\d+) ?\d*(-?\d{2,3} ?){0,4}$/', $value) === 1;
    }

    /**
     * Format example +15555555555
     *
     * @param  string  $value  The phone number to check
     *
     * @return bool is it correct format?
     */
    protected function isE164(string $value): bool
    {
        $conditions = [];
        $conditions[] = strpos($value, '+') === 0;
        $conditions[] = strlen($value) >= 9;
        $conditions[] = strlen($value) <= 16;
        $conditions[] = preg_match("/[^\d+]/i", $value) === 0;

        return (bool) array_product($conditions);
    }

    /**
     * Format examples: (555) 555-5555, 1 (555) 555-5555, 1-555-555-5555, 555-555-5555, 1 555 555-5555
     * https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers#United_States.2C_Canada.2C_and_other_NANP_countries
     *
     * @param  string  $value  The phone number to check
     *
     * @return bool is it correct format?
     */
    protected function isNANP(string $value): bool
    {
        $conditions = [];
        $conditions[] = preg_match("/^(?:\+1|1)?\s?-?\(?\d{3}\)?(\s|-)?\d{3}-\d{4}$/i", $value) > 0;

        return (bool) array_product($conditions);
    }

    private function example(): string
    {
        switch ($this->format) {
            case static::FORMAT_DIGITS:
                $example = '111111199999';

                break;
            case static::FORMAT_E123:
                $example = '+22 555 666 7777';

                break;
            case static::FORMAT_E164:
                $example = '+15556667777';

                break;
            case static::FORMAT_NANP:
                $example = '+1 (555) 666-7';

                break;
            default:
                $example = '+15556667777';

                break;
        }

        return $example;
    }
}
