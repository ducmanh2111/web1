<?php

use Illuminate\Database\Seeder;

class SlideTableSeeder extends Seeder
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
            'image' => '/slider/image_slider1.jpg',
          ],
          [
            'image' => '/slider/image_slider2.jpg',
          ],
          [
            'image' => '/slider/image_slider3.jpg',
          ],
            [
              'image' => '/slider/image_slider12.jpg',
            ],
            [
              'image' => '/slider/image_slider22.jpg',
            ],

        ];
        DB::table('slide_images') ->insert($data);
    }
}
