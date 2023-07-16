<?php

namespace Yormy\ValidationLaravel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class XidRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        $rules['xid'] = ['required'];

        return $rules;
    }
}
