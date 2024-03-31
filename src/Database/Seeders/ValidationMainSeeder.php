<?php

namespace Yormy\ValidationLaravel\Database\Seeders;

use Illuminate\Database\Seeder;

class ValidationMainSeeder extends Seeder
{
    public function run()
    {
        (new BannedSeeder())->run();
    }
}
