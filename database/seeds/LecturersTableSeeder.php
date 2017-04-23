 <?php

use Illuminate\Database\Seeder;

class LecturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('lecturers')->delete();

        DB::table('lecturers')->insert([
            //ce
            ['lecturer_id'=>'4241', 'full_name'=>'Mr. Thomas Kwantwi', 'department_id'=> 'CE' ,
             'username' => 'TKwantwi' , 'password' => Hash::make('pass') ],
            ['lecturer_id'=>'4242', 'full_name'=>'Mr. Albert K. Ansah', 'department_id'=>'CE' ,
            'username' => 'AAnsah' , 'password' =>Hash::make('pass')],
            ['lecturer_id'=>'4243', 'full_name'=>'Mr. Simon Arthur', 'department_id'=>'CE' ,
            'username' => 'SArthur' , 'password' =>Hash::make('pass')],
            ['lecturer_id'=>'4244', 'full_name'=>'Mr. Felix L. Aryeh', 'department_id'=>'CE',
            'username' => 'FAryeh' , 'password' =>Hash::make('pass')],
            ['lecturer_id'=>'4245', 'full_name'=>'Mr. Stephen Anokye', 'department_id'=>'CE',
            'username' => 'SAnokye' , 'password' => Hash::make('pass')],
            ['lecturer_id'=>'4246', 'full_name'=>'Mr. William A. Agangiba', 'department_id'=>'CE',
            'username' => 'WAgangiba' , 'password' => Hash::make('pass')],
            ['lecturer_id'=>'4247', 'full_name'=>'Mrs. Millicent Agangiba', 'department_id'=>'CE',
            'username' => 'MAgangiba' , 'password' => Hash::make('pass')],
            ['lecturer_id'=>'4248', 'full_name'=>'Mr. Emmanuel Effah', 'department_id'=>'CE',
            'username' => 'EEffah' , 'password' =>  Hash::make('pass')],
            //el
            ['lecturer_id'=>'4221', 'full_name'=>'Mr. Philip Blewushie', 'department_id'=>'EL',
            'username' => 'PBlewushie' , 'password' => Hash::make('pass')],
            ['lecturer_id'=>'4222', 'full_name'=>'Mr. Eric Addo', 'department_id'=>'EL',
            'username' => 'EAddo' , 'password' => Hash::make('pass')],
            ['lecturer_id'=>'4223', 'full_name'=>'Mr. Seth Ofori', 'department_id'=>'EL',
            'username' => 'SOfori' , 'password' => Hash::make('pass')],
            ['lecturer_id'=>'4224', 'full_name'=>'Mr. Fuseini Mumuni', 'department_id'=>'EL',
            'username' => 'FMumuni' , 'password' => Hash::make('pass')],
            ['lecturer_id'=>'4225', 'full_name'=>'Mr. John K. Annan', 'department_id'=>'EL',
            'username' => 'JAnnan' , 'password' => Hash::make('pass')],
            
            
            
        ]);
    }
}
