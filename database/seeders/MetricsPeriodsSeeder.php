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
        /* Нормирующие значения для периода 1 */
        for ($m = 1; $m <= 9; $m++) {
            DB::table('metrics_periods')->insert([
                'metric_id' => $m,
                'period_id' => 1,
           ]);
        }

        /* метрики для периода 1 */
        DB::table('metrics_periods')->insert([
            'metric_id' => 23,
            'period_id' => 1,
            'target_value' => 0,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 24,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 25,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 26,
            'period_id' => 1,
            'target_value' => 0,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 28,
            'period_id' => 1,
            'target_value' => 0.2,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 29,
            'period_id' => 1,
            'target_value' => 0.2,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 32,
            'period_id' => 1,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 34,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 35,
            'period_id' => 1,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 37,
            'period_id' => 1,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 41,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 50,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 51,
            'period_id' => 1,
            'target_value' => 0.5,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 54,
            'period_id' => 1,
            'target_value' => 0.2,
        ]);

        /* Нормирующие значения для периода 2 */
        for ($m = 1; $m <= 13; $m++) {
            DB::table('metrics_periods')->insert([
                'metric_id' => $m,
                'period_id' => 2,
            ]);
        }
        DB::table('metrics_periods')->insert([
            'metric_id' => 19,
            'period_id' => 2,
        ]);

        /* метрики для периода 2 */

        DB::table('metrics_periods')->insert([
            'metric_id' => 23,
            'period_id' => 2,
            'target_value' => 0,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 24,
            'period_id' => 2,
            'target_value' => 0.6,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 25,
            'period_id' => 2,
            'target_value' => 0.53,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 26,
            'period_id' => 2,
            'target_value' => 0,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 28,
            'period_id' => 2,
            'target_value' => 0.25,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 29,
            'period_id' => 2,
            'target_value' => 0.25,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 32,
            'period_id' => 2,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 34,
            'period_id' => 2,
            'target_value' => 0.6,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 35,
            'period_id' => 2,
            'target_value' => 0.75,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 37,
            'period_id' => 2,
            'target_value' => 0.3,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 38,
            'period_id' => 2,
            'target_value' => 0.7,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 39,
            'period_id' => 2,
            'target_value' => 0.3,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 40,
            'period_id' => 2,
            'target_value' => 0,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 41,
            'period_id' => 2,
            'target_value' => 0.6,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 42,
            'period_id' => 2,
            'target_value' => 0.6,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 50,
            'period_id' => 2,
            'target_value' => 0.6,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 51,
            'period_id' => 2,
            'target_value' => 0.6,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 52,
            'period_id' => 2,
            'target_value' => 0,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 53,
            'period_id' => 2,
            'target_value' => 1,
        ]);
        DB::table('metrics_periods')->insert([
            'metric_id' => 54,
            'period_id' => 2,
            'target_value' => 0.25,
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
