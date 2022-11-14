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
            'lastname' => 'Кузин',
            'firstname' => 'Дмитрий',
            'surname' => 'Александрович',
            'email' => '2repby@gmail.com',
            'phone' => '79222588216',
            'password' => Hash::make('password'),
            'is_admin' => '1',
        ]);
        DB::table('users')->insert([
            'lastname' => 'Осипов',
            'firstname' => 'Антон',
            'surname' => 'Олегович',
            'email' => 'tohaosipov@yandex.ru',
            'phone' => '79224448131',
            'password' => Hash::make('password'),
            'is_admin' => '0',
        ]);
        DB::table('users')->insert([
            'lastname' => 'Абабий',
            'firstname' => 'Виталий',
            'surname' => 'Дмитриевич',
            'email' => 'ababij_vd@surgu.ru',
            'phone' => '79610980000',
            'password' => Hash::make('password'),
            'is_admin' => '0',
        ]);
    }
}
