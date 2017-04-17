<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->delete();
        DB::table('departments')->insert([
        	['dept_name' => 'CE' ],
        	['dept_name' => 'MC'],
        	['dept_name' => 'EL'],
        	['dept_name' => 'MA'],
        	['dept_name' => 'MN']
        	]);
    }
}
