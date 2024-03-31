<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

class ImageMaliciousDetectionRule extends Rule
{
    protected $malicious_keywords = [
        '\\/bin\\/bash',
        '__HALT_COMPILER',
        'Guzzle',
        'Laravel',
        'Monolog',
        'PendingRequest',
        '\\<script',
        'ThinkPHP',
        'phar',
        'phpinfo',
        '\\<\\?php',
        '\\$_GET',
        'whoami',
    ];

    /**
     * Determine if the validation rule passes.
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function passes(string $attribute, mixed $value): bool
    {
        if (! request()->hasFile($attribute)) {
            return true;
        }

        return ! preg_match('/('.implode('|', $this->malicious_keywords).')/im', request()->file($attribute)->get());
    }

    /**
     * Get the validation error message.
     */
    public function message(): string
    {
        return 'There is malicious content in the file';
    }
}
