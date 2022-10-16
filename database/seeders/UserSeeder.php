<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'kda',
            'email' => '2repby@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'kuzin_da',
            'email' => 'kuzin_da@surgu.ru',
            'password' => Hash::make('password'),
            'is_admin' => '0',
        ]);
        DB::table('users')->insert([
            'name' => '4repby',
            'email' => '4repby@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => '0',
        ]);
    }
}
