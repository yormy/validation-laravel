<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules\Factories;

use DivineOmega\DOFileCachePSR6\CacheItemPool;
use DivineOmega\PasswordExposed\PasswordExposedChecker;

/**
 * Class PasswordExposedCheckerFactory.
 */
class PasswordExposedCheckerFactory
{
    /**
     * Creates and returns an instance of PasswordExposedChecker.
     */
    public function instance(): PasswordExposedChecker
    {
        $cache = new CacheItemPool();

        $cache->changeConfig([
            'cacheDirectory' => $this->getCacheDirectory(),
        ]);

        return new PasswordExposedChecker(null, $cache);
    }

    /**
     * Gets the directory to store the cache files.
     */
    private function getCacheDirectory(): string
    {
        if (function_exists('storage_path')) {
            return storage_path('app/password-exposed-cache/');
        }

        return sys_get_temp_dir().'/password-exposed-cache/';
    }
}
