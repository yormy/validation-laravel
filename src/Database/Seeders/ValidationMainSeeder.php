<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Database\Seeders;

use Illuminate\Database\Seeder;

class ValidationMainSeeder extends Seeder
{
    public function run(): void
    {
        (new BannedEmailsTableSeeder())->run();
    }
}
