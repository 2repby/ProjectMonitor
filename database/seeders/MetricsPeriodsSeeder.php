<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetricsPeriodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($m = 1; $m <= 22; $m++) {
            for ($p = 1; $p <= 3; $p++) {
                DB::table('metrics_periods')->insert([
                    'metric_id' => $m,
                    'period_id' => $p,
                ]);
            }
        }


        DB::table('metrics_periods')->insert([
            'metric_id' => 23,
            'period_id' => 1,
            'target_value' => 0,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 23,
            'period_id' => 2,
            'target_value' => 0,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 23,
            'period_id' => 3,
            'target_value' => 0,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 24,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 24,
            'period_id' => 2,
            'target_value' => 0.6,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 24,
            'period_id' => 3,
            'target_value' => 0.7,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 25,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 25,
            'period_id' => 2,
            'target_value' => 0.53,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 25,
            'period_id' => 3,
            'target_value' => 0.55,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 26,
            'period_id' => 1,
            'target_value' => 0,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 26,
            'period_id' => 2,
            'target_value' => 0,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 26,
            'period_id' => 3,
            'target_value' => 0,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 27,
            'period_id' => 1,
            'target_value' => 0.2,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 27,
            'period_id' => 2,
            'target_value' => 0.25,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 27,
            'period_id' => 3,
            'target_value' => 0.3,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 28,
            'period_id' => 1,
            'target_value' => 0.2,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 28,
            'period_id' => 2,
            'target_value' => 0.25,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 28,
            'period_id' => 3,
            'target_value' => 0.3,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 29,
            'period_id' => 1,
            'target_value' => 0.2,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 29,
            'period_id' => 2,
            'target_value' => 0.25,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 29,
            'period_id' => 3,
            'target_value' => 0.3,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 30,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 30,
            'period_id' => 2,
            'target_value' => 0.55,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 30,
            'period_id' => 3,
            'target_value' => 0.6,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 31,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 31,
            'period_id' => 2,
            'target_value' => 0.55,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 31,
            'period_id' => 3,
            'target_value' => 0.6,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 32,
            'period_id' => 1,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 32,
            'period_id' => 2,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 32,
            'period_id' => 3,
            'target_value' => 0.7,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 33,
            'period_id' => 1,
            'target_value' => 1,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 33,
            'period_id' => 2,
            'target_value' => 1,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 33,
            'period_id' => 3,
            'target_value' => 1,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 34,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 34,
            'period_id' => 2,
            'target_value' => 0.6,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 34,
            'period_id' => 3,
            'target_value' => 0.7,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 35,
            'period_id' => 1,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 35,
            'period_id' => 2,
            'target_value' => 0.75,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 35,
            'period_id' => 3,
            'target_value' => 0.8,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 36,
            'period_id' => 1,
            'target_value' => 0.3,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 36,
            'period_id' => 2,
            'target_value' => 0.3,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 36,
            'period_id' => 3,
            'target_value' => 0.3,
        ]);

        /* Метрика 38 вводится с 2022 года*/

        DB::table('metrics_periods')->insert([
            'metric_id' => 37,
            'period_id' => 2,
            'target_value' => 0.3,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 37,
            'period_id' => 3,
            'target_value' => 0.3,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 38,
            'period_id' => 1,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 38,
            'period_id' => 2,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 38,
            'period_id' => 3,
            'target_value' => 0.7,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 39,
            'period_id' => 1,
            'target_value' => 0.3,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 39,
            'period_id' => 2,
            'target_value' => 0.3,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 39,
            'period_id' => 3,
            'target_value' => 0.3,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 40,
            'period_id' => 1,
            'target_value' => 0,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 40,
            'period_id' => 2,
            'target_value' => 0,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 40,
            'period_id' => 3,
            'target_value' => 0,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 41,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 41,
            'period_id' => 2,
            'target_value' => 0.6,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 41,
            'period_id' => 3,
            'target_value' => 0.7,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 42,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 42,
            'period_id' => 2,
            'target_value' => 0.6,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 42,
            'period_id' => 3,
            'target_value' => 0.7,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 43,
            'period_id' => 1,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 43,
            'period_id' => 2,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 43,
            'period_id' => 3,
            'target_value' => 0.7,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 44,
            'period_id' => 1,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 44,
            'period_id' => 2,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 44,
            'period_id' => 3,
            'target_value' => 0.7,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 45,
            'period_id' => 1,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 45,
            'period_id' => 2,
            'target_value' => 0.8,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 45,
            'period_id' => 3,
            'target_value' => 1,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 46,
            'period_id' => 1,
            'target_value' => 0.2,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 46,
            'period_id' => 2,
            'target_value' => 0.3,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 46,
            'period_id' => 3,
            'target_value' => 0.5,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 47,
            'period_id' => 1,
            'target_value' => 0.2,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 47,
            'period_id' => 2,
            'target_value' => 0.3,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 47,
            'period_id' => 3,
            'target_value' => 0.5,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 48,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 48,
            'period_id' => 2,
            'target_value' => 0.55,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 48,
            'period_id' => 3,
            'target_value' => 0.6,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 49,
            'period_id' => 1,
            'target_value' => 1,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 49,
            'period_id' => 2,
            'target_value' => 1,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 49,
            'period_id' => 3,
            'target_value' => 1,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 50,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 50,
            'period_id' => 2,
            'target_value' => 0.6,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 50,
            'period_id' => 3,
            'target_value' => 0.7,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 51,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 51,
            'period_id' => 2,
            'target_value' => 0.6,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 51,
            'period_id' => 3,
            'target_value' => 0.7,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 52,
            'period_id' => 1,
            'target_value' => 0,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 52,
            'period_id' => 2,
            'target_value' => 0,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 52,
            'period_id' => 3,
            'target_value' => 0,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 53,
            'period_id' => 1,
            'target_value' => 1,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 53,
            'period_id' => 2,
            'target_value' => 1,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 53,
            'period_id' => 3,
            'target_value' => 1,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 54,
            'period_id' => 1,
            'target_value' => 0.2,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 54,
            'period_id' => 2,
            'target_value' => 0.25,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 54,
            'period_id' => 3,
            'target_value' => 0.3,
        ]);

        DB::table('metrics_periods')->insert([
            'metric_id' => 55,
            'period_id' => 1,
            'target_value' => 0.1,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 55,
            'period_id' => 2,
            'target_value' => 0.2,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 55,
            'period_id' => 3,
            'target_value' => 0.3,
        ]);

        for ($m = 56; $m <= 77; $m++) {
            for ($p = 4; $p <= 7; $p++) {
                DB::table('metrics_periods')->insert([
                    'metric_id' => $m,
                    'period_id' => $p,
                    'target_value' => 0,
                ]);
            }
        }
    }
}
