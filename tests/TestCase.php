<?php

namespace Yormy\ValidationLaravel\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Yormy\ValidationLaravel\Models\DisposableEmail;
use Yormy\ValidationLaravel\ValidationLaravelServiceProvider;

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->seeder();
    }

    private function seeder()
    {
        DisposableEmail::create(['banned' => 'web-ideal.fr']);
        DisposableEmail::create(['banned' => 'test@example.com']);
    }

    protected function getPackageProviders($app)
    {
        return [
            ValidationLaravelServiceProvider::class,
        ];
    }

    protected function refreshTestDatabase()
    {
        if (! RefreshDatabaseState::$migrated) {

            $this->artisan('db:wipe');
            $path = './tests/Setup/Database/Migrations';

            $this->loadMigrationsFrom(__DIR__.'/../tests/Setup/Database/Migrations');
            $this->artisan('migrate');

            RefreshDatabaseState::$migrated = true;
        }

        $this->beginDatabaseTransaction();
    }
}
