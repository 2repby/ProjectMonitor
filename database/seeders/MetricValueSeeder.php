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
        /* Период 1- 2020 - 2021 уч. год */
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

        /* Кондинский район */
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 15,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 1387,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 1159,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 2546,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 161,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 16,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 72,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 110,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 14,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 1069,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 450,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 420,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 45,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 57,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 432,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 1159,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 103,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 1387,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 1159,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 1,
        ]);

        /* Нефтеюганский район */
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 1526,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 1459,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 2995,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 160,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 46,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 77,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 357,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 520,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 945,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 38,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 42,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 78,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 1110,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 77,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 869,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 825,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 8,
        ]);

        /* Нижневартовский район */
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 14,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 1162,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 989,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 2151,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 152,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 14,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 73,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 62,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 14,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 710,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 989,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 1730,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 2,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 69,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 989,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 62,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 625,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 530,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 515,
        ]);

        /* Октябрьский район */
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 17,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 1333,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 1329,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 2662,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 187,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 142,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 47,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 16,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 942,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 996,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 889,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 40,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 105,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 168,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 902,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 45,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 646,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 665,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 420,
        ]);

        /* Советский район */
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 1858,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 1739,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 3597,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 154,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 35,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 54,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 125,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 1858,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 854,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 1989,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 112,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 35,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 33,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 1739,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 97,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 412,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 910,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 79,
        ]);


        /* Сургутский район */
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 21,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 5066,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 4699,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 4606,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 436,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 27,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 420,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 125,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 21,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 5066,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 4699,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 4606,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 220,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 16,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 306,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 1433,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 4408,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 98,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 21,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 1266,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 1645,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 70,
        ]);

        /* Ханты-Мансийский район */
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 23,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 643,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 602,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 1245,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 138,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 23,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 85,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 56,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 23,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 283,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 349,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 657,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 56,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 10,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 52,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 602,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 56,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 305,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 488,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 473,
        ]);

        /* г. Когалым */
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 2329,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 2248,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 4577,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 178,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 12,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 334,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 31,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 1335,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 1910,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 1942,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 63,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 248,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 87,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 1653,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 24,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 1377,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 1564,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 391,
        ]);

        /* г.Лангепас */
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 1563,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 1432,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 2995,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 132,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 10,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 247,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 39,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 500,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 828,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 1551,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 21,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 238,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 150,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 1156,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 18,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 286,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 503,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 115,
        ]);

        /* г.Мегион */
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 2235,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 1983,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 4218,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 185,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 16,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 288,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 32,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 1058,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 1408,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 567,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 252,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 272,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 1680,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 32,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 2,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 294,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 418,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 167,
        ]);

        /* г.Нефтеюганск */
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 4312,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 3777,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 8089,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 315,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 28,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 414,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 150,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 1859,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 2474,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 2455,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 56,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 399,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 198,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 3777,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 150,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 2889,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 3777,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 679,
        ]);

        /* г.Нижневартовск */
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 33,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 10178,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 9307,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 19485,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 769,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 46,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 1305,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 139,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 33,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 4589,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 8010,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 18798,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 17,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 1216,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 7726,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 139,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 0,
        ]);

        /* г.Нягань */
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 2327,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 2219,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 4546,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 178,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 15,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 286,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 15,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 1025,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 988,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 2137,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 252,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 150,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 1288,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 12,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 1243,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 1192,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 812,
        ]);

        /* г.Покачи */
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 677,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 530,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 1207,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 49,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 87,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 10,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 421,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 314,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 462,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 26,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 72,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 118,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 243,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 8,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 497,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 408,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 261,
        ]);

        /* г.Пыть-Ях */
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 1687,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 1577,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 3264,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 131,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 256,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 45,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 798,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 1049,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 1547,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 134,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 1122,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 45,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 2,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 892,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 965,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 82,
        ]);

        /* г.Радужный */
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 1633,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 1506,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 3139,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 135,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 208,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 12,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 74,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 584,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 1567,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 20,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 180,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 98,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 856,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 9,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 984,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 1108,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 71,
        ]);

        /* г.Сургут */
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 33,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 14839,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 14245,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 29084,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 1163,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 223,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 1244,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 513,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 33,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 9625,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 10743,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 17742,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 1066,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 142,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 6751,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 342,
        ]);
        /* Значение отсуствует */
//        DB::table('metric_values')->insert([
//            'area_id' => 19,
//            'metric_id' => 41,
//            'period_id' => 1,
//            'value' => 0,
//        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 14839,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 14839,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 1546,
        ]);

        /* г.Урай */
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 1614,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 1465,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 3079,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 128,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 209,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 75,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 535,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 890,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 1491,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 209,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 122,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 1122,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 75,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 2,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 710,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 703,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 1210,
        ]);

        /* г.Ханты-Мансийск */
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 9,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 4073,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 3735,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 7808,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 289,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 34,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 435,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 152,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 9,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 2573,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 2771,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 5189,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 91,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 336,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 1391,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 3195,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 140,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 1320,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 1250,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 1265,
        ]);

        /* г.Югорск */
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 1,
            'period_id' => 1,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 2,
            'period_id' => 1,
            'value' => 1647,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 3,
            'period_id' => 1,
            'value' => 1465,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 4,
            'period_id' => 1,
            'value' => 3112,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 6,
            'period_id' => 1,
            'value' => 135,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 7,
            'period_id' => 1,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 8,
            'period_id' => 1,
            'value' => 232,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 9,
            'period_id' => 1,
            'value' => 41,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 23,
            'period_id' => 1,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 24,
            'period_id' => 1,
            'value' => 1647,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 25,
            'period_id' => 1,
            'value' => 1465,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 26,
            'period_id' => 1,
            'value' => 1411,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 28,
            'period_id' => 1,
            'value' => 54,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 29,
            'period_id' => 1,
            'value' => 2,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 32,
            'period_id' => 1,
            'value' => 232,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 34,
            'period_id' => 1,
            'value' => 1465,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 35,
            'period_id' => 1,
            'value' => 1465,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 37,
            'period_id' => 1,
            'value' => 34,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 41,
            'period_id' => 1,
            'value' => 2,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 50,
            'period_id' => 1,
            'value' => 1647,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 51,
            'period_id' => 1,
            'value' => 1465,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 54,
            'period_id' => 1,
            'value' => 260,
        ]);

        /* Период 2- 2021 - 2022 уч. год */

        /* Белоярский район */
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 1232,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 1095,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 2327,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 114,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 14,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 125,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 37,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 86,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 26,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 64,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 160,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 673,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 931,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 1378,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 59,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 8,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 98,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 210,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 891,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 35,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 9,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 26,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 36,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 1232,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 1041,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 115,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 488,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 1,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 1,
        ]);

        /* Берёзовский район */
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 1032,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 954,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 1986,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 122,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 8,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 113,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 22,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 21,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 15,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 12,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 105,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 783,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 662,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 995,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 36,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 87,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 182,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 954,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 22,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 313,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 287,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 69,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 2,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 0,
        ]);

        /* Кондинский район */
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 15,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 1386,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 1161,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 2547,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 159,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 17,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 151,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 126,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 244,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 49,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 327,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 15,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 34,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 14,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 825,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 992,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 1362,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 55,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 62,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 1161,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 124,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 42,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 45,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 15,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 584,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 829,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 152,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 3,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 736,
        ]);

        /* Нефтеюганский район */
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 1530,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 1409,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 2939,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 166,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 16,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 206,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 72,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 177,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 49,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 22,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 32,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 201,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 516,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 804,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 2145,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 50,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 153,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 437,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 865,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 72,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 58,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 31,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 12,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 870,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 787,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 117,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 4,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 634 ,
        ]);

        /* Нижневартовский район */
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 14,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 1141,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 914,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 2055,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 149,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 14,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 44,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 50,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 126,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 42,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 589,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 8,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 153,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 14,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 789,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 914,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 1899,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 35,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 2,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 914,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 50,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 126,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 25,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 744,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 470,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 129,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 5,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 503,
        ]);

        /* Октябрьский район */
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 17,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 1345,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 1399,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 2684,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 238,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 77,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 61,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 121,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 16,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 160,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 25,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 165,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 17,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 1092,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 1130,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 920,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 65,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 9,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 60,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 216,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 1090,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 61,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 86,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 8,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 104,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 15,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 815,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 814,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 103,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 6,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 360 ,
        ]);

        /* Советский район */
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 1937,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 1646,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 3583,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 280,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 15,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 198,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 66,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 199,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 60,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 22,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 19,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 55,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 1453,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 1481,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 2435,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 57,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 10,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 175,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 1157,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 1646,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 57,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 43,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 12,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 869,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 1186,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 33,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 7,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 608 ,
        ]);

        /* Сургутский район */
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 21,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 5240,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 4232,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 9772,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 446,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 48,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 663,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 257,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 371,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 61,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 49,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 72,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 661,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 21,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 3354,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 3513,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 6254,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 143,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 17,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 557,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 1566,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 3301,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 200,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 260,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 38,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 17,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 21,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 36,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 3406,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 2793,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 511,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 8,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 2541 ,
        ]);

        /* Ханты-Мансийский район */
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 23,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 682,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 599,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 1281,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 77,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 33,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 37,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 111,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 108,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 17,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 251,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 56,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 56,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 23,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 328,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 353,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 839,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 49,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 18,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 33,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 599,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 111,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 38,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 12,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 38,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 305,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 459,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 54,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 9,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 459 ,
        ]);

        /* г.Когалым */
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 2437,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 2209,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 4646,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 176,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 12,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 283,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 67,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 129,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 23,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 80,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 136,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 215,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 1469,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 1896,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 1976,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 65,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 258,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 119,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 1659,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 52,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 22,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 8,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 114,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 1506,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 1539,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 167,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 10,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 1126,
        ]);

        /* г.Лангепас */
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 1634,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 1431,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 3065,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 133,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 10,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 207,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 56,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 138,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 16,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 17,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 207,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 206,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 537,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 1058,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 1908,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 42,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 140,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 1012,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 1431,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 22,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 70,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 12,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 2,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 105,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 780,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 805,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 169,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 11,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 450 ,
        ]);

        /* г.Мегион */
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 2165,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 1980,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 4145,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 171,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 15,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 247,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 58,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 162,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 22,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 20,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 148,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 607,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 1057,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 1266,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 960,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 72,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 244,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 890,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 1606,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 58,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 25,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 18,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 57,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 1220,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 1505,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 528,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 12,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 623 ,
        ]);

        /* г.Нефтеюганск */
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 4554,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 3755,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 8309,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 322,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 31,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 582,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 80,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 140,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 24,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 1450,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 546,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 3042,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 2983,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 3502,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 99,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 437,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 478,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 3755,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 80,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 140,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 24,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 1450,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 3187,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 2440,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 427,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 13,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 1923 ,
        ]);

        /* г.Нижневартовск */
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 34,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 10541,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 9750,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 20291,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 785,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 50,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 1485,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 177,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 333,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 73,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 215,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 868,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 34,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 6543,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 8425,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 15789,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 80,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 1396,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 5257,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 8756,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 177,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 278,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 57,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 196,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 6534,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 6095,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 756,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 14,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 0 ,
        ]);

        /* г.Нягань */
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 2406,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 2230,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 4636,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 183,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 200,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 39,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 61,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 14,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 88,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 482,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 215,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 1448,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 1828,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 2272,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 96,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 138,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 146,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 1512,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 30,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 32,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 29,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 269,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 1654,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 1782,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 176,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 15,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 653,
        ]);

        /* г.Покачи */
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 677,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 535,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 1212,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 52,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 72,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 19,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 41,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 52,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 118,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 164,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 539,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 461,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 621,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 39,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 62,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 296,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 528,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 18,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 41,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 16,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 3,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 80,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 547,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 496,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 67,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 16,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 341 ,
        ]);

        /* г.Пыть-Ях */
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 1714,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 1608,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 3322,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 133,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 8,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 142,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 52,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 101,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 14,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 30,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 15,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 147,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 875,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 821,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 1768,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 51,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 99,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 1608,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 52,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 2,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 10,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 923,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 1051,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 86,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 17,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 84 ,
        ]);

        /* г.Радужный */
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 1682,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 1486,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 3168,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 134,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 11,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 194,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 20,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 21,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 424,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 167,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 696,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 896,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 2254,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 60,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 154,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 213,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 1234,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 10,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 71,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 1021,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 1096,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 119,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 18,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 153 ,
        ]);

        /* г.Сургут */
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 33,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 15745,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 14279,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 30024,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 2121,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 115,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 1239,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 513,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 736,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 245,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 8,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 156,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 1694,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 33,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 8430,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 11829,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 17715,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 723,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 8,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 890,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 1615,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 11240,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 467,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 302,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 113,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 17,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 144,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 9616,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 10875,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 1413,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 0,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 19,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 2063 ,
        ]);

        /* г.Урай */
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 1582,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 1455,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 3037,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 126,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 162,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 77,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 216,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 55,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 19,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 15,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 210,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 569,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 1049,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 2808,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 2,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 149,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 484,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 1455,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 73,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 65,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 50,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 6,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 1076,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 1306,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 142,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 20,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 60,
        ]);

        /* г.Ханты-Мансийск */
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 9,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 4389,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 3876,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 8265,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 298,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 30,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 539,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 179,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 361,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 88,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 68,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 581,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 315,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 9,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 2933,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 2984,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 7387,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 58,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 13,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 418,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 2331,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 3876,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 179,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 361,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 57,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 28,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 8,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 349,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 2733,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 2904,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 198,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 21,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 2607 ,
        ]);

        /* г.Югорск */
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 1,
            'period_id' => 2,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 2,
            'period_id' => 2,
            'value' => 1639,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 3,
            'period_id' => 2,
            'value' => 1533,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 4,
            'period_id' => 2,
            'value' => 3172,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 6,
            'period_id' => 2,
            'value' => 135,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 7,
            'period_id' => 2,
            'value' => 7,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 8,
            'period_id' => 2,
            'value' => 247,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 9,
            'period_id' => 2,
            'value' => 50,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 10,
            'period_id' => 2,
            'value' => 73,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 11,
            'period_id' => 2,
            'value' => 31,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 12,
            'period_id' => 2,
            'value' => 38,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 13,
            'period_id' => 2,
            'value' => 27,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 19,
            'period_id' => 2,
            'value' => 201,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 23,
            'period_id' => 2,
            'value' => 5,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 24,
            'period_id' => 2,
            'value' => 1032,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 25,
            'period_id' => 2,
            'value' => 1195,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 26,
            'period_id' => 2,
            'value' => 2639,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 28,
            'period_id' => 2,
            'value' => 70,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 29,
            'period_id' => 2,
            'value' => 4,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 32,
            'period_id' => 2,
            'value' => 170,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 34,
            'period_id' => 2,
            'value' => 926,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 35,
            'period_id' => 2,
            'value' => 1092,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 37,
            'period_id' => 2,
            'value' => 50,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 38,
            'period_id' => 2,
            'value' => 64,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 39,
            'period_id' => 2,
            'value' => 18,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 40,
            'period_id' => 2,
            'value' => 22,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 41,
            'period_id' => 2,
            'value' => 2,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 42,
            'period_id' => 2,
            'value' => 18,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 50,
            'period_id' => 2,
            'value' => 985,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 51,
            'period_id' => 2,
            'value' => 1057,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 52,
            'period_id' => 2,
            'value' => 153,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 53,
            'period_id' => 2,
            'value' => 1,
        ]);
        DB::table('metric_values')->insert([
            'area_id' => 22,
            'metric_id' => 54,
            'period_id' => 2,
            'value' => 1015 ,
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
