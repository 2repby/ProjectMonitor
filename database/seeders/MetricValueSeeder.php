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
        for ($a=1; $a <= 22; $a++) {
            for ($m = 1; $m <= 23; $m++) {
                for ($p = 1; $p <= 12; $p++) {
                    DB::table('metric_values')->insert([
                        'area_id' => $a,
                        'metric_id' => $m,
                        'period_id' => $p,
                        'value' => $this->gauss(0,1),
                    ]);
                }
            }

            for ($m = 24; $m <= 29; $m++) {
                for ($p = 13; $p <= 16; $p++) {
                    DB::table('metric_values')->insert([
                        'area_id' => $a,
                        'metric_id' => $m,
                        'period_id' => $p,
                        'value' => $this->gauss(0,1),
                    ]);
                }
            }

            for ($m = 30; $m <= 45; $m++) {
                for ($p = 13; $p <= 16; $p++) {
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
