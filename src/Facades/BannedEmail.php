<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Facades;

use Illuminate\Support\Facades\Facade;
use Yormy\ValidationLaravel\Services\BannedEmailService;
use Yormy\ValidationLaravel\Services\DisposableEmailService;


class BannedEmail extends Facade
{
    protected static function getFacadeAccessor()
    {
        return BannedEmailService::class;
    }
}
