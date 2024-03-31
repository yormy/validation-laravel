<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Repositories;

use Illuminate\Support\Facades\Cache;
use Yormy\ValidationLaravel\Models\BannedEmail;

class BannedEmailRepository
{
    public const CACHE_KEY = 'banned_emails';

    public function __construct(private ?BannedEmail $model = null)
    {
        if (! $model) {
            $this->model = new BannedEmail();
        }
    }

    public function getAll()
    {
        if (Cache::has('banned-emails')) {
            return Cache::get(self::CACHE_KEY);
        }
        $data = $this->getAllTokenized();
        $expirationInSeconds = 60 * 60 * 2;
        Cache::put(self::CACHE_KEY, $data, $expirationInSeconds);

        return $data;
    }

    private function getAllTokenized()
    {
        $all = $this->model->all()->pluck('banned');

        return '#'.$all->implode('#').'#';
    }

    private function flush(): void
    {
        Cache::forget(self::CACHE_KEY);
    }
}
