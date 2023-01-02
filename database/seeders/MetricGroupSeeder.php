<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetricGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metric_groups')->insert([
            'code' => '1',
            'shortname' => '',
            'name' => 'Показатели по выявлению предпочтений обучающихся в области профессиональной ориентации',
            'description' => '',
            'project_id' => 1,
        ]);
        DB::table('metric_groups')->insert([
            'code' => '2',
            'shortname' => '',
            'name' => 'Показатели по сопровождению профессионального самоопределения обучающихся',
            'description' => '',
            'project_id' => 1,
        ]);
        DB::table('metric_groups')->insert([
            'code' => '3',
            'shortname' => '',
            'name' => 'Показатели по учету обучающихся, выбравших для сдачи государственной итоговой аттестации по образовательным программам среднего общего образования учебные предметы, соответствующие профилю обучения',
            'description' => '',
            'project_id' => 1,
        ]);
        DB::table('metric_groups')->insert([
            'code' => '4',
            'shortname' => '',
            'name' => 'Показатели по проведению ранней профориентации обучающихся',
            'description' => '',
            'project_id' => 1,
        ]);
        DB::table('metric_groups')->insert([
            'code' => '5',
            'shortname' => '',
            'name' => 'Показатели по проведению профориентации обучающихся с ОВЗ',
            'description' => '',
            'project_id' => 1,
        ]);
        DB::table('metric_groups')->insert([
            'code' => '6',
            'shortname' => '',
            'name' => 'Показатели по взаимодействию с учреждениями/предприятиями',
            'description' => '',
            'project_id' => 1,
        ]);
        DB::table('metric_groups')->insert([
            'code' => '7',
            'shortname' => '',
            'name' => 'Показатели по учету обучающихся, поступивших в ПОО и ВО по профилю обучения',
            'description' => '',
            'project_id' => 1,
        ]);
        DB::table('metric_groups')->insert([
            'code' => '8',
            'shortname' => '',
            'name' => 'Показатели по взаимодействию со средними профессиональными образовательными организациями и образовательными организациями высшего образования',
            'description' => '',
            'project_id' => 1,
        ]);
        DB::table('metric_groups')->insert([
            'code' => '9',
            'shortname' => '',
            'name' => 'Показатели по учёту выявленных потребностей рынка труда региона',
            'description' => '',
            'project_id' => 1,
        ]);
        DB::table('metric_groups')->insert([
            'code' => '10',
            'shortname' => '',
            'name' => 'Показатели по учету обучающихся, участвующих в конкурсах профориентационной направленности',
            'description' => '',
            'project_id' => 1,
        ]);
        DB::table('metric_groups')->insert([
            'code' => '11',
            'shortname' => '',
            'name' => 'Нормирующие значения',
            'description' => '',
            'project_id' => 1,
        ]);
    }
}
