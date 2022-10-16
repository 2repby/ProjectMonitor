<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'shortname' => 'Белоярский район',
            'name' => 'Белоярский район',
            'square' => 41646,
            'population' => 28741,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'Берёзовский район',
            'name' => 'Берёзовский район',
            'square' => 88100.5,
            'population' => 22286,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'Кондинский район',
            'name' => 'Кондинский район',
            'square' => 54627.4,
            'population' => 30570,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'Нефтеюганский район',
            'name' => 'Нефтеюганский район',
            'square' => 24548,
            'population' => 44987,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'Нижневартовский район',
            'name' => 'Нижневартовский район',
            'square' => 117212.2,
            'population' => 36222,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'Октябрьский район',
            'name' => 'Октябрьский район',
            'square' => 24502.1,
            'population' => 27894,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'Советский район',
            'name' => 'Советский район',
            'square' => 30100,
            'population' => 47338,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'Сургутский район',
            'name' => 'Сургутский район',
            'square' => 104997.5,
            'population' => 126110,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'Ханты-Мансийский район',
            'name' => 'Ханты-Мансийский район',
            'square' => 46064,
            'population' => 19604,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'г.Когалым',
            'name' => 'город Когалым',
            'square' => 153.5,
            'population' => 61866,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'г.Лангепас',
            'name' => 'город Лангепас',
            'square' => 59.5,
            'population' => 42701,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'г.Мегион',
            'name' => 'город Мегион',
            'square' => 50.5,
            'population' => 59424,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'г.Нефтеюганск',
            'name' => 'город Нефтеюганск',
            'square' => 154,
            'population' => 124732,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'г.Нижневартовск',
            'name' => 'город Нижневартовск',
            'square' => 271.3,
            'population' => 283256,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'г.Нягань',
            'name' => 'город Нягань',
            'square' => 814,
            'population' => 63034,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'г.Покачи',
            'name' => 'город Покачи',
            'square' => 21.8,
            'population' => 16040,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'г.Пыть-Ях',
            'name' => 'город Пыть-Ях',
            'square' => 80.4,
            'population' => 40180,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'г.Радужный',
            'name' => 'город Радужный',
            'square' => 142.1,
            'population' => 43577,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'г.Сургут',
            'name' => 'город Сургут',
            'square' => 354,
            'population' => 396443,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'г.Урай',
            'name' => 'город Урай',
            'square' => 54.3,
            'population' => 41315,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'г.Ханты-Мансийск',
            'name' => 'город Ханты-Мансийск',
            'square' => 337.8,
            'population' => 107473,
        ]);
        DB::table('areas')->insert([
            'shortname' => 'г.Югорск',
            'name' => 'город Югорск',
            'square' => 152.2,
            'population' => 38238,
        ]);

    }
}
