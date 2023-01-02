<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetricValueSeeder extends Seeder
{
    /**
     * Get normal Gauss distribution.
     *
     * @return float
     */
    private function gauss($min = 0, $max = 1) {
        do {
            $mean = ($max - $min) * 0.7 + $min;
            $std_dev = 0.3;

            $x=(float)rand()/(float)getrandmax();
            $y=(float)rand()/(float)getrandmax();

            $u=sqrt(-2*log($x))*cos(2*pi()*$y);
            $r = $u*$std_dev+$mean;
        }
        while ($r < 0 or $r > 1);

        return $r;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Белоярский район */
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 1194,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 1086,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 2280,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 113,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 12,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 125,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 26,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 10,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 412,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 587,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 1147,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 98,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 795,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 22,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 791,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 873,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 198,
        ]);

        /* Берёзовский район */
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 14,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 1069,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 963,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 2032,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 122,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 24,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 52,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 14,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 1069,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 963,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 607,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 16,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 111,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 921,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 23,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 371,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 155,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 7,
        ]);

        for ($a=1; $a <= 22; $a++) {
            for ($m = 56; $m <= 77; $m++) {
                for ($p = 4; $p <= 7; $p++) {
                    DB::table('metric_values')->insert([
                        'area_id' => $a,
                        'metric_id' => $m,
                        'period_id' => $p,
                        'value' => $this->gauss(0,1),
                    ]);
                }
            }
        }
    }
}
