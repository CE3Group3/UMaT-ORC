<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
         $this->call(AdminTableSeeder::class);
         $this->call(CoursesTableSeeder::class);
         $this->call(DepartmentTableSeeder::class);
         $this->call(LecturersTableSeeder::class);
         $this->call(StudentTableSeeder::class);
    }
}
