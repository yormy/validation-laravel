<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Yormy\ValidationLaravel\Providers\EventServiceProvider;

class ValidationLaravelServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publish();

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->registerTranslations();

        $this->registerGuestRoutes();
        $this->registerUserRoutes();
        $this->registerAdminRoutes();
    }

    public function registerTranslations(): void
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'validation');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/validation-laravel.php', 'validation-laravel');
        $this->app->register(EventServiceProvider::class);
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path('migrations/*.php')) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }

    private function publish(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/validation-laravel.php' => config_path('validation-laravel.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/bedrock-usersv2'),
            ], 'translations');

            $this->publishMigrations();
        }
    }

    private function publishMigrations(): void
    {
        $migrations = [
            'create_referral_actions_table.php',
            'create_referral_domains_table.php',
            'create_referral_payments_table.php',
            'create_referral_awards_table.php',
            'seed_referral_actions_table.php',
        ];

        $index = 0;
        foreach ($migrations as $migrationFileName) {
            if (! $this->migrationFileExists($migrationFileName)) {
                $sequence = date('Y_m_d_His', time());
                $newSequence = substr($sequence, 0, strlen($sequence) - 2);
                $paddedIndex = str_pad(strval($index), 2, '0', STR_PAD_LEFT);
                $newSequence .= $paddedIndex;
                $this->publishes([
                    __DIR__."/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/'.$newSequence.'_'.$migrationFileName),
                ], 'migrations');

                $index++;
            }
        }
    }

    private function registerGuestRoutes(): void
    {
    }

    private function registerUserRoutes(): void
    {
        Route::macro('ValidationLaravelUser', function (string $prefix): void {
            Route::prefix($prefix)->name($prefix.'.')->group(function (): void {
                Route::get('/details', [ReferrerDetailsController::class, 'show'])->name('show');
            });
        });
    }

    private function registerAdminRoutes(): void
    {
        Route::macro('ValidationLaravelAdmin', function (string $prefix): void {
            Route::prefix($prefix)->name($prefix.'.')->group(function (): void {
                Route::get('/referrers', [ReferrerOverviewController::class, 'index'])->name('overview');
                Route::get('/referrers/{referrer}', [
                    ReferrerDetailsController::class,
                    'showForUser',
                ])
                    ->name('showForUser');
            });
        });
    }
}
