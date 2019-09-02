<?php

use Illuminate\Database\Seeder;

class PromotionTableSeeder extends Seeder
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
              'discount' => '0',
              'start_date' => now(),
              'end_date' => now(),
            ],

        ];
        DB::table('promotion') ->insert($data);
    }
}
