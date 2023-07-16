<?php

namespace Yormy\ValidationLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Yormy\ValidationLaravel\ValidationLaravel
 */
class ValidationLaravelFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ValidationLaravel::class;
    }
}
