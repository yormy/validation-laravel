<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Http\Requests\Traits;

use Illuminate\Support\Arr;
use Yormy\ValidationLaravel\Exceptions\GettingNonValidatedRequestException;

trait RetrievesSafeInput
{
    /**
     * Get an element from the validated input.
     */
    public function __get(mixed $key): mixed
    {
        $invalidatedKey = null;
        try {
            $values = $this->validated();
            $isValidated = array_key_exists($key, $values);

            if (! $isValidated) {
                $invalidatedKey = $key;
            }
        } catch (\Throwable $e) {
            $values = $this->all();
        }

        if ($invalidatedKey) {
            throw new GettingNonValidatedRequestException($key);
        }

        return Arr::get($values, $key, fn () => $this->route($key));
    }
}
