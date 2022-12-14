<?php

namespace Database\Seeders;

use App\Services\MetricService;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            ProjectSeeder::class,
            AreaSeeder::class,
            PeriodSeeder::class,
            MetricGroupSeeder::class,
            MetricSeeder::class,
            MetricsPeriodsSeeder::class,
            MetricValueSeeder::class,
            AreaUsersSeeder::class,
        ]);
    }
}
