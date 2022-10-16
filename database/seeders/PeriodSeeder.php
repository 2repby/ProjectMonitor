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
            'name' => 'январь 2022',
            'start_at' => '2022-01-01 00:00:00',
            'end_at' => '2022-01-31 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => 'февраль 2022',
            'start_at' => '2022-02-01 00:00:00',
            'end_at' => '2022-02-28 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => 'март 2022',
            'start_at' => '2022-03-01 00:00:00',
            'end_at' => '2022-03-31 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => 'апрель 2022',
            'start_at' => '2022-04-01 00:00:00',
            'end_at' => '2022-04-30 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => 'май 2022',
            'start_at' => '2022-05-01 00:00:00',
            'end_at' => '2022-05-31 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => 'июнь 2022',
            'start_at' => '2022-06-01 00:00:00',
            'end_at' => '2022-06-30 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => 'июль 2022',
            'start_at' => '2022-07-01 00:00:00',
            'end_at' => '2022-07-31 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => 'авнуст 2022',
            'start_at' => '2022-08-01 00:00:00',
            'end_at' => '2022-08-31 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => 'сентябрь 2022',
            'start_at' => '2022-09-01 00:00:00',
            'end_at' => '2022-09-30 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => 'октябрь 2022',
            'start_at' => '2022-10-01 00:00:00',
            'end_at' => '2022-10-31 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => 'ноябрь 2022',
            'start_at' => '2022-11-01 00:00:00',
            'end_at' => '2022-11-30 23:59:59',
        ]);
        DB::table('periods')->insert([
            'name' => 'декабрь 2022',
            'start_at' => '2022-12-01 00:00:00',
            'end_at' => '2022-12-31 23:59:59',
        ]);
    }
}
