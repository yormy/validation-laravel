<?php

namespace Yormy\ValidationLaravel\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannedSeeder extends Seeder
{
    public function run(): void
    {
        $path = __DIR__ . '/Data/banned-dump.sql';
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
}
