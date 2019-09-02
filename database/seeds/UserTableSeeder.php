<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
          'name' => 'pham dinh nhat',
          'email' => 'abc123@gmail.com',
          'level' => 1,
          'password' => bcrypt('123456')
        ]);
    }
}
