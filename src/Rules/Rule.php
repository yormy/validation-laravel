<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use function __;
use function class_basename;
use Exception;
use function get_called_class;
use Illuminate\Contracts\Validation\Rule as BaseRule;
use Illuminate\Support\Str;

abstract class Rule implements BaseRule
{
    protected string $attribute;

    protected string $value = '';

    private ?Exception $exception;

    public function __construct(Exception $exception = null)
    {
        $this->exception = $exception;
    }

    public function message(): string
    {
        return (string) __('bedrock-core::validation.'.$this->getMessageKey(), [
            'attribute' => $this->getAttribute(),
            'value' => $this->getValue(),
        ]);
    }

    public function getAttribute(): string
    {
        return $this->attribute;
    }

    public function setAttribute(string $attribute): void
    {
        $this->attribute = $attribute;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getMessageKey(): string
    {
        $calledClassName = class_basename(get_called_class());

        return Str::slug(Str::snake($calledClassName));
    }

    protected function failed(): bool
    {
        if ($this->exception) {
            throw $this->exception;
        }

        return false;
    }
}
