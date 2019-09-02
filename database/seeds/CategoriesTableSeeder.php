<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=
        [
            [
              'cat_name' => 'Truyen tranh',
              'cat_slug' => str_slug('truyen tranh')
            ],
            [
              'cat_name' => 'Truyen trinh tham',
              'cat_slug' => str_slug('Truyen trinh tham')
            ],
        ];
        DB::table('categories') ->insert($data);
    }
}
