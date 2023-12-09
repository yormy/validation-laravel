<?php

namespace Yormy\ValidationLaravel\Facades;

use Illuminate\Support\Facades\Facade;
use Yormy\ValidationLaravel\Services\BannedEmailService;

class BannedEmail extends Facade
{
    protected static function getFacadeAccessor() {
        return BannedEmailService::class;
    }
}
