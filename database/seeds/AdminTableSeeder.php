<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loginadmin')->delete();

        DB::table('loginadmin')->insert([
        	['username' => 'superuser', 'password' => Hash::make('root')],
            ['username' => 'superadmin', 'password' => Hash::make('root')]
    

        	]);

    }
}
