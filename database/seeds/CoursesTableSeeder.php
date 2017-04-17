<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('courses')->delete();

         DB::table('courses')->insert([
         	['course_code'=>'CE_151',
             'course_name'=>'Applied Electricty',
             'description'=>'EL'
         	],
         	['course_code'=>'CE_155',
             'course_name'=>'Technical Drawing',
             'description'=>'MC',
            ],
            ['course_code'=>'CE_159',
             'course_name'=>'Introduction to Computing',
             'description'=>'CE'
            ],
            [
            'course_code'=>'CE_174',
             'course_name'=>'Programming in C++',
             'description'=>'CE'
            ],
            [
            'course_code'=>'CE_156',
             'course_name'=>'Engineering Drawing',
             'description'=>'MC'
            ],
            [
            'course_code'=>'CE_271',
             'course_name'=>'Data Structure and Algorithm',
             'description'=>'CE'
            ],
            [
            'course_code'=>'CE_277',
             'course_name'=>'Software Engineering',
             'description'=>'CE'
            ],
            [
            'course_code'=>'CE_260',
             'course_name'=>'Mathematical Analysis',
             'description'=>'MA',
            ],
            [
             'course_code'=>'CE_272',
             'course_name'=>'Electronics II',
             'description'=>'EL'
            ],
            [
            'course_code'=>'CE_276',
             'course_name'=>'Signals and systems',
             'description'=>'CE'
            ],
            [
            'course_code'=>'CE_361',
             'course_name'=>'Probability and Statictics',
             'description'=>'MA'
            ],
            [
            'course_code'=>'CE_365',
             'course_name'=>'Environmental Management',
             'description'=>'ES'
            ],
            [
            'course_code'=>'CE_373',
             'course_name'=>'Object - Oriented Programming in C++',
             'description'=>'CE'
            ],
            [
            'course_code'=>'CE_364',
             'course_name'=>'Logic of Computer Science',
             'description'=>'CE'
            ],
            [
            'course_code'=>'CE_372',
             'course_name'=>'Web Programming',
             'description'=>'CE'
            ],
            [
            'course_code'=>'CE_475',
             'course_name'=>'Artificial Intelligence',
             'description'=>'CE'
            ],
            [
            'course_code'=>'CE_471',
             'course_name'=>'Industrial Electronics',
             'description'=>'EL'
            ],
            [
            'course_code'=>'CE_470',
             'course_name'=>'Compiler Design',
             'description'=>'CE'
            ],
            [
            'course_code'=>'CE_472',
             'course_name'=>'Network Principles and Computer Security',
             'description'=>'CE'
            ],
            [
            'course_code'=>'CE_474',
             'course_name'=>'Introduction to Robotics',
             'description'=>'CE'
            ],
            [
            'course_code'=>'EL_151',
             'course_name'=>'Engineering Drawing I',
             'description'=>'MC'
            ],
            [
            'course_code'=>'EL_167',
             'course_name'=>'Basic Mechanics',
             'description'=>'MC'
            ],
            [
            'course_code'=>'EL_169',
             'course_name'=>'Differentiation and Integration',
             'description'=>'MA'
            ],
            [
            'course_code'=>'EL_168',
             'course_name'=>'Basic Material Science',
             'description'=>'MN'
            ],
            [
            'course_code'=>'EL_164',
             'course_name'=>'Basic Electronics',
             'description'=>'EL',
            ],
            [
            'course_code'=>'EL_159',
             'course_name'=>'Introduction to Computing',
             'description'=>'CE'
            ],
            [
            'course_code'=>'EL_172',
             'course_name'=>'Circuit Theory',
             'description'=>'EL'
            ],
            [
            'course_code'=>'EL_273',
             'course_name'=>'DC Machines', 
             'description'=>'EL'
            ],
            [
            'course_code'=>'EL_267',
             'course_name'=>'Thermodynamics',
             'description'=>'MC'
            ],
            [
            'course_code'=>'EL_265',
             'course_name'=>'Differential Equations',
             'description'=>'MA'
            ],
            [
            'course_code'=>'EL_277',
             'course_name'=>'Transformers',
             'description'=>'EL'
            ],
            [
            'course_code'=>'EL_260',
             'course_name'=>'Mathematical Analysis',
             'description'=>'MA'
            ],
            [
            'course_code'=>'EL_264',
             'course_name'=>'Fluid Mechanic',
             'description'=>'MC'
            ],
            [
            'course_code'=>'EL_363',
             'course_name'=>'Numerical Analysis',
             'description'=>'MA'
            ],
            [
            'course_code'=>'EL_365',
             'course_name'=>'Environmental Management',
             'description'=>'CE'
            ],
            [
            'course_code'=>'EL_371',
             'course_name'=>'Utilisation of Electrical Power I',
             'description'=>'EL'
            ],
            [
            'course_code'=>'EL_375',
             'course_name'=>'Winders (Electrical)',
             'description'=>'CE'
            ], 
            [
            'course_code'=>'EL_380',
             'course_name'=>'Synchronous Machines',
             'description'=>'MC'
            ],
            [
            'course_code'=>'EL_457',
             'course_name'=>'Law of Contract and Tort',
             'description'=>'MN'
            ],
            [
            'course_code'=>'EL_459',
             'course_name'=>'Operations Research',
             'description'=>'MN'
            ],
            [
            'course_code'=>'EL_461',
             'course_name'=>'Principles of Economicss',
             'description'=>'MN'
            ],
            [
            'course_code'=>'EL_262',
             'course_name'=>'Computer Applications',
             'description'=>'CE'
            ],
            [
            'course_code'=>'EL_460',
             'course_name'=>'Instrumentation and Control',
             'description'=>'EL'
            ],
            [
            'course_code'=>'EL_462',
             'course_name'=>'Industrial and Maintenance Engineering.',
             'description'=>'MC'
            ],
            [
            'course_code'=>'EL_472',
             'course_name'=>'Power Electronics',
             'description'=>'EL'
            ]
         	]);
    }
}
