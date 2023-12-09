<?php

namespace Yormy\ValidationLaravel\Database\Seeders;

use Illuminate\Database\Seeder;
use Mexion\TestappCore\Domain\Billing\Database\Seeders\BillingFeatureSeeder;
use Mexion\TestappCore\Domain\Billing\Database\Seeders\BillingPlanFeatureSeeder;
use Mexion\TestappCore\Domain\Billing\Database\Seeders\BillingPlanSeeder;
use Mexion\TestappCore\Domain\Billing\Database\Seeders\BillingProductSeeder;
use Mexion\TestappCore\Domain\Billing\Database\Seeders\BillingPromocodeSeeder;
use Yormy\ValidationLaravel\Database\Seeders\BannedSeeder;

class ValidationMainSeeder extends Seeder
{
    public function run()
    {
        (new BannedSeeder())->run();
    }
}
