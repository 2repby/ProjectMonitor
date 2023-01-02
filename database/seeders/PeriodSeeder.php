<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periods')->insert([
            'name' => '2020 - 2021 уч. год',
            'start_at' => '2021-09-01 00:00:00',
            'end_at' => '2022-06-30 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => '2021 - 2022 уч. год',
            'start_at' => '2022-09-01 00:00:00',
            'end_at' => '2023-06-30 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => '2022 - 2023 уч. год',
            'start_at' => '2023-09-01 00:00:00',
            'end_at' => '2024-06-30 23:59:59',
        ]);

        DB::table('periods')->insert([
            'name' => 'I квартал 2022',
            'start_at' => '2022-01-01 00:00:00',
            'end_at' => '2022-03-31 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => 'II квартал 2022',
            'start_at' => '2022-04-01 00:00:00',
            'end_at' => '2022-06-30 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => 'III квартал 2022',
            'start_at' => '2022-07-01 00:00:00',
            'end_at' => '2022-09-30 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => 'IV квартал 2022',
            'start_at' => '2022-10-01 00:00:00',
            'end_at' => '2022-12-31 23:59:59',
        ]);


    }
}
