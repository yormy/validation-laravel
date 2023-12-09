<?php

namespace Yormy\ValidationLaravel;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Yormy\ValidationLaravel\Providers\EventServiceProvider;

class ValidationLaravelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/validation-laravel.php' => config_path('validation-laravel.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views/blade' => base_path('resources/views/vendor/validation-laravel'),
            ], 'blade');

            $this->publishes([
                __DIR__.'/../resources/views/vue' => base_path('resources/views/vendor/validation-laravel'),
                __DIR__.'/../resources/assets' => resource_path('assets/vendor/validation-laravel'),
            ], 'vue');

            $this->publishMigrations();
            $ui_type = 'blade';
        } else {
            $ui_type = 'blade';
            if ('VUE' === config('validation-laravel.ui_type')) {
                $ui_type = 'vue';
            }
        }

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadViewsFrom(__DIR__.'/../resources/views/'.$ui_type, 'validation-laravel');

        $this->registerGuestRoutes();
        $this->registerUserRoutes();
        $this->registerAdminRoutes();
    }

    private function publishMigrations()
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

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/validation-laravel.php', 'validation-laravel');
        $this->app->register(EventServiceProvider::class);
    }

    private function registerGuestRoutes()
    {
    }

    private function registerUserRoutes()
    {
        Route::macro('ValidationLaravelUser', function (string $prefix) {
            Route::prefix($prefix)->name($prefix.'.')->group(function () {
                Route::get('/details', [ReferrerDetailsController::class, 'show'])->name('show');
            });
        });
    }

    private function registerAdminRoutes()
    {
        Route::macro('ValidationLaravelAdmin', function (string $prefix) {
            Route::prefix($prefix)->name($prefix.'.')->group(function () {
                Route::get('/referrers', [ReferrerOverviewController::class, 'index'])->name('overview');
                Route::get('/referrers/{referrer}', [
                    ReferrerDetailsController::class,
                    'showForUser',
                ])
                    ->name('showForUser');
            });
        });
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
}
