<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Repositories;

use Illuminate\Support\Facades\Cache;
use Yormy\ValidationLaravel\Models\DisposableEmail;

class DisposableEmailRepository
{
    public const CACHE_KEY = 'emails_disposable';

    public function __construct(private ?DisposableEmail $model = null)
    {
        if (! $model) {
            $this->model = new DisposableEmail();
        }
    }

    public function getAll()
    {
        if (Cache::has('emails_disposable')) {
            return Cache::get(self::CACHE_KEY);
        }
        $data = $this->getAllTokenized();
        $expirationInSeconds = 60 * 60 * 2;
        Cache::put(self::CACHE_KEY, $data, $expirationInSeconds);

        return $data;
    }

    private function getAllTokenized()
    {
        $all = $this->model->all()->pluck('email');

        return '#'.$all->implode('#').'#';
    }

    private function flush(): void
    {
        Cache::forget(self::CACHE_KEY);
    }
}
