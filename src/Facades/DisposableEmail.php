<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Facades;

use Illuminate\Support\Facades\Facade;
use Yormy\ValidationLaravel\Services\DisposableEmailService;


class DisposableEmail extends Facade
{
    protected static function getFacadeAccessor()
    {
        return DisposableEmailService::class;
    }
}
