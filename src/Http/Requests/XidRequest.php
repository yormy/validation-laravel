<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class XidRequest extends FormRequest
{
    public function rules(): array
    {
        $rules['xid'] = ['required'];

        return $rules;
    }
}
