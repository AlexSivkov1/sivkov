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
            'name' => 'Admin',
            'username' => 'Adminy',
            'email' => 'Adminy@mail.ru',
            'password' => bcrypt('rootadmin')
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Author',
            'username' => 'AuthorName',
            'email' => 'Author@mail.ru',
            'password' => bcrypt('rootauthor')
        ]);



    }
}
