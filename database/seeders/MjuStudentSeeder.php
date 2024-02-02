<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MjuStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('major')
        //     ->insert([
        //         ['major_id' => 1,
        //         'name' => 'เคมี ',
        //         'name_en' => 'Chemistry',],

        //         ['major_id' => 2,
        //         'name' => 'ชีววิทยา',
        //         'name_en' => 'Biology',],

        //         ['major_id' => 3,
        //         'name' => 'ฟิสิกส์',
        //         'name_en' => 'Physics',],

        //         ['major_id' => 4,
        //         'name' => 'พฤกษศาสตร์ ',
        //         'name_en' => 'Botany',],

        //         ['major_id' => 5,
        //         'name' => 'ธรณีวิทยา ',
        //         'name_en' => 'Geology',]
        //     ]);

        \App\Models\MjuStudent::factory(50)->create();
    }
}