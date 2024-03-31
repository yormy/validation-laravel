<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest as IlluminateFormRequest;
use Yormy\ValidationLaravel\Http\Requests\Traits\RetrievesSafeInput;

class FormRequest extends IlluminateFormRequest
{
    use RetrievesSafeInput;
}
