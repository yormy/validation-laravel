<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileNotExists extends Rule
{
    protected bool $includePrefix = true;

    private string $path;

    private string $filename;

    /**
     * FileExtension constructor.
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * Determine if the validation rule passes.
     */
    public function passes($attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        /**
         * @var UploadedFile $value
         */
        $this->filename = $value->getClientOriginalName();

        return ! Storage::exists($this->path.'/'.$this->filename);
    }

    /**
     * Get the validation error message.
     */
    //    public function message()
    //    {
    //        return __('Bestand :filename bestaat al', ['filename' => $this->filename]);
    //    }

    public function message(): string
    {
        $key = 'core::validation.'.$this->getMessageKey();

        $message = (string) __(
            $key.'.base',
            [
                'attribute' => $this->getAttribute(),
            ]
        );

        if ($this->includePrefix) {
            return $message.'; '.__($key.'.prefix');
        }

        return $message;
    }
}
