<?php

namespace Yormy\ValidationLaravel\Rules;

use Exception;

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
        'whoami'
    ];


    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function passes($attribute, $value)
    {
        if (!request()->hasFile($attribute)) {
            return true;
        }

        return !preg_match("/(".join("|", $this->malicious_keywords).")/im", request()->file($attribute)->get());
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'There is malicious content in the file';
    }
}
