<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Database\Seeders;

use Illuminate\Database\Seeder;
use Yormy\ValidationLaravel\Models\BannedEmail;

class ValidationMainSeeder extends Seeder
{
    public function run(): void
    {
        BannedEmail::create(['email' => 'banned-domain.com']);
        BannedEmail::create(['email' => 'banned@banned-email.com']);
    }
}
