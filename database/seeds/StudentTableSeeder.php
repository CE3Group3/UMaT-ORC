<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->delete();
        
        DB::table('students')->insert([
            //ce
            ['index_no' => '42402913','ref_no' => '000305513','student_name' => 'Micheal Ansah',
             'dept_id' => 'CE', 'year' => '2013',
            ],
            ['index_no' => '42403013','ref_no' => '000305613','student_name' => 'Kojo Tom',
             'dept_id' => 'CE', 'year' => '2013',
            ],
            ['index_no' => '42403114','ref_no' => '000305514','student_name' => 'Mike Will',
             'dept_id' => 'CE', 'year' => '2013',
            ],
            ['index_no' => '42402915','ref_no' => '000305515','student_name' => 'Sean Carter',
             'dept_id' => 'CE', 'year' => '2013',
            ],
            
            
                    
        ]); 
    }
}
