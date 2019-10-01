<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'shani',
            'email' => 'shanisingh961@email.com',
            'password' => bcrypt('Shani@123'),
        ]);
        
    }
}
