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
                'index_no' => '42402913','course_code' => 'CE_151','class' => 'CE1',
                'marks' => '98', 'approved' => '0',
            ],
            [
                'index_no' => '42402913','course_code' => 'CE_155','class' => 'CE1',
                'marks' => '94', 'approved' => '0',
            ],
            [
                'index_no' => '42402913','course_code' => 'CE_159','class' => 'CE1',
                'marks' => '87', 'approved' => '0',
            ],
            [
                'index_no' => '42402913','course_code' => 'CE_174','class' => 'CE1',
                'marks' => '40', 'approved' => '0',
            ],
            [
                'index_no' => '42402913','course_code' => 'CE_156','class' => 'CE1',
                'marks' => '80', 'approved' => '0',
            ],
            [
                'index_no' => '42402913','course_code' => 'CE_271','class' => 'CE2',
                'marks' => '74', 'approved' => '0',
            ],
            [
                'index_no' => '42402913','course_code' => 'CE_277','class' => 'CE2',
                'marks' => '95', 'approved' => '0',
            ],
            [
                'index_no' => '42402913','course_code' => 'CE_260','class' => 'CE2',
                'marks' => '82', 'approved' => '0',
            ],
            [
                'index_no' => '42402913','course_code' => 'CE_272','class' => 'CE2',
                'marks' => '80', 'approved' => '0',
            ],
            [
                'index_no' => '42402913','course_code' => 'CE_276','class' => 'CE2',
                'marks' => '85', 'approved' => '0',
            ],
            [
                'index_no' => '42402913','course_code' => 'CE_361','class' => 'CE3',
                'marks' => '85', 'approved' => '0',
            ],
            [
                'index_no' => '42402913','course_code' => 'CE_365','class' => 'CE3',
                'marks' => '90', 'approved' => '0',
            ],
            [
                'index_no' => '42402913','course_code' => 'CE_373','class' => 'CE3',
                'marks' => '70', 'approved' => '0',
            ],
            [
                'index_no' => '42402913','course_code' => 'CE_364','class' => 'CE3',
                'marks' => '75', 'approved' => '0',
            ],
            [
                'index_no' => '42402913','course_code' => 'CE_372','class' => 'CE3',
                'marks' => '80', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_151','class' => 'EL1',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_167','class' => 'EL1',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_169','class' => 'EL1',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_168','class' => 'EL1',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_164','class' => 'EL1',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_159','class' => 'EL1',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_172','class' => 'EL1',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_273','class' => 'EL2',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_267','class' => 'EL2',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_265','class' => 'EL2',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_277','class' => 'EL2',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_260','class' => 'EL2',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_264','class' => 'EL2',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_363','class' => 'EL3',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_365','class' => 'EL3',
                'marks' => '99', 'approved' => '0',
            ],

            [
                'index_no' => '42202114','course_code' => 'EL_371','class' => 'EL3',
                'marks' => '99', 'approved' => '0',
            ]

        ]);
    }
}
