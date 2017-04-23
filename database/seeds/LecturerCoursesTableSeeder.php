<?php

use Illuminate\Database\Seeder;

class LecturerCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lecturer_courses')->delete();

        DB::table('lecturer_courses')->insert([
            ['lecturer_id' => '4246', 'course_code' => 'CE_174' ],
            ['lecturer_id' => '4246', 'course_code' => 'CE_159' ],
            ['lecturer_id' => '4246', 'course_code' => 'CE_373' ],
            ['lecturer_id' => '4244', 'course_code' => 'EL_159' ],
            ['lecturer_id' => '4244', 'course_code' => 'EL_262' ],
            ['lecturer_id' => '4244', 'course_code' => 'CE_372' ],

        ]);
    }
}
