<?php

use Illuminate\Database\Seeder;

class ResultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('results')->delete();

        DB::table('results')->insert([
            [
                'index_no' => '42400014','course_code' => 'CE_151', 'course_name'=>'Applied Electricty','class' => 'CE1',
                'marks' => '98', 'approved' => '1',
            ],
            [
                'index_no' => '42400014','course_code' => 'CE_155','course_name'=>'Technical Drawing','class' => 'CE1',
                'marks' => '94', 'approved' => '1',
            ],
            [
                'index_no' => '42400014','course_code' => 'CE_159','course_name'=>'Introduction to Computing','class' => 'CE1',
                'marks' => '87', 'approved' => '1',
            ],
            [
                'index_no' => '42400014','course_code' => 'CE_174', 'course_name'=>'Programming in C++','class' => 'CE1',
                'marks' => '40', 'approved' => '1',
            ],
            [
                'index_no' => '42400014','course_code' => 'CE_156', 'course_name'=>'Engineering Drawing','class' => 'CE1',
                'marks' => '80', 'approved' => '1',
            ],
            [
                'index_no' => '42400014','course_code' => 'CE_271','course_name'=>'Data Structure and Algorithm', 'class' => 'CE2',
                'marks' => '74', 'approved' => '1',
            ],
            [
                'index_no' => '42400014','course_code' => 'CE_277', 'course_name'=>'Software Engineering','class' => 'CE2',
                'marks' => '95', 'approved' => '1',
            ],
            [
                'index_no' => '42400014','course_code' => 'CE_260','course_name'=>'Mathematical Analysis', 'class' => 'CE2',
                'marks' => '82', 'approved' => '1',
            ],
            [
                'index_no' => '42400014','course_code' => 'CE_272', 'course_name'=>'Electronics II','class' => 'CE2',
                'marks' => '80', 'approved' => '1',
            ],
            [
                'index_no' => '42400014','course_code' => 'CE_276','course_name'=>'Signals and systems', 'class' => 'CE2',
                'marks' => '85', 'approved' => '1',
            ],
            [
                'index_no' => '42400014','course_code' => 'CE_361', 'course_name'=>'Probability and Statictics','class' => 'CE3',
                'marks' => '85', 'approved' => '1',
            ],
            [
                'index_no' => '42400014','course_code' => 'CE_365', 'course_name'=>'Environmental Management', 'class' => 'CE3',
                'marks' => '90', 'approved' => '1',
            ],
            [
                'index_no' => '42400014','course_code' => 'CE_364','course_name'=>'Logic of Computer Science', 'class' => 'CE3',
                'marks' => '75', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_151','course_name'=>'Engineering Drawing I','class' => 'EL1',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_167',  'course_name'=>'Basic Mechanics','class' => 'EL1',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_169','course_name'=>'Differentiation and Integration','class' => 'EL1',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_168','course_name'=>'Basic Material Science', 'class' => 'EL1',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_164','course_name'=>'Basic Electronics','class' => 'EL1',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_159', 'course_name'=>'Introduction to Computing','class' => 'EL1',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_172','course_name'=>'Circuit Theory', 'class' => 'EL1',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_273','course_name'=>'DC Machines','class' => 'EL2',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_267','course_name'=>'Thermodynamics','class' => 'EL2',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_265','course_name'=>'Differential Equations','class' => 'EL2',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_277','course_name'=>'Transformers', 'class' => 'EL2',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_260', 'course_name'=>'Mathematical Analysis','class' => 'EL2',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_264','course_name'=>'Fluid Mechanic','class' => 'EL2',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_363', 'course_name'=>'Numerical Analysis','class' => 'EL3',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_365','course_name'=>'Environmental Management','class' => 'EL3',
                'marks' => '99', 'approved' => '1',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_371','course_name'=>'Utilisation of Electrical Power I', 'class' => 'EL3',
                'marks' => '99', 'approved' => '1',
            ]

        ]);
    }
}
