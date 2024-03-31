<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use Illuminate\Contracts\Validation\Rule;

class FileExtension implements Rule
{
    private array $extensions;

    private bool $mimeTypePasses;

    private bool $extensionPasses;

    /**
     * FileExtension constructor.
     */
    public function __construct(array $extensions)
    {
        $this->extensions = $extensions;
    }

    public function passes(string $attribute, mixed $value): bool
    {
        return false;
        //        $mimeTypeValidator = Validator::make(['image' => $value], ['image' => 'mimes:' . $this->getMimeString()]);
        //
        //        $this->mimeTypePasses = !$mimeTypeValidator->fails();
        //        $this->extensionPasses = \in_array($value->getClientOriginalExtension(), $this->extensions, true);
        //        return $this->mimeTypePasses && $this->extensionPasses;
    }

    /**
     * Get the validation error message.
     */
    public function message(): string
    {
        return 'todo invalid';
        //        if (!$this->extensionPasses) {
        //            return __('Alleen :extensions bestanden zijn toegestaan', ['extensions' => $this->getExtensionMessage()]);
        //        }
        //        return __('Dit bestand bevat een ongeldige structuur.');
    }

    private function getMimeString(): string
    {
        return implode(',', $this->extensions);
    }

    private function getExtensionMessage(): string
    {
        return strtoupper(implode(', ', $this->extensions));
    }
}
