<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class EncodedImage extends Rule
{
    public const WEBP = 'webp';

    public const JPEG = 'jpeg';

    /**
     * Pointer to the temporary file.
     */
    protected $file;

    protected $parameters;

    public function __construct(array $parameters = [])
    {
        $this->parameters = $parameters;
    }

    /**
     * Determine if the validation rule passes.
     *
     * The rule requires at least a single parameter, which is
     * the expected mime types of the file e.g. png, jpeg etc.
     * You can also supply multiple mime types as an array.
     */
    public function passes($attribute, $value): bool
    {
        $value = base64_decode($value);
        $this->setAttribute($attribute);

        $valid_mime = false;

        foreach ($this->parameters as $mime) {
            if (Str::startsWith($value, "data:image/{$mime};base64,")) {
                $valid_mime = true;

                break;
            }
        }

        if ($valid_mime) {
            /**
             * @var Illuminate\Contracts\Validation\Validator $validator
             */
            $validator = validator(['file' => $this->createTemporaryFile($value)], ['file' => 'image']);
            $result = $validator->passes();

            fclose($this->file);

            return $result;
        }

        return false;
    }

    public function message(): string
    {
        $key = 'core::validation.'.$this->getMessageKey();

        $mimes = $this->parameters;
        $types = implode(' ; ', $mimes);

        return (string) __(
            $key.'.base',
            [
                'attribute' => $this->getAttribute(),
                'type' => $types,
            ]
        );
    }

    /**
     * Write the given data to a temporary file.
     */
    protected function createTemporaryFile(string $data): UploadedFile
    {
        $this->file = tmpfile();

        fwrite($this->file, base64_decode(Str::after($data, 'base64,')));

        return new UploadedFile(
            stream_get_meta_data($this->file)['uri'],
            'image',
            'text/plain',
            null,
            true,
            true
        );
    }
}
