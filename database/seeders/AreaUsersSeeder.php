<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($a = 1; $a <= 22; $a++) {
            DB::table('area_users')->insert([
                'area_id' => $a,
                'user_id' => 1,
            ]);
        }
        for ($a = 1; $a <= 10; $a++) {
            DB::table('area_users')->insert([
                'area_id' => $a,
                'user_id' =>2,
            ]);
        }
        for ($a = 11; $a <= 22; $a++) {
            DB::table('area_users')->insert([
                'area_id' => $a,
                'user_id' =>3,
            ]);
        }
    }
}
