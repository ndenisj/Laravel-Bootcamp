<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        	'role_id' => '1',
        	'name' => 'Mr. Admin',
        	'username' => 'admin',
        	'email' => 'admin@email.com',
        	'password' => bcrypt('00000000'),
        ]);

        DB::table('users')->insert([
        	'role_id' => '2',
        	'name' => 'Mr. Author',
        	'username' => 'author',
        	'email' => 'author@author.com',
        	'password' => bcrypt('00000000'),
        ]);
    }
}
