<?php

use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->truncate();
        DB::table('slides')->insert([
            [
                'id' => 1,
                'url' => 'http://theme.hstatic.net/1000160337/1000373353/14/psl_1_r1_slide_img_5.jpg',
                'content' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 2,
                'url' => 'http://theme.hstatic.net/1000160337/1000373353/14/psl_1_r1_slide_img_4.jpg',
                'content' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 3,
                'url' => 'http://theme.hstatic.net/1000160337/1000373353/14/psl_1_r1_slide_img_3.jpg',
                'content' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
        ]);
        DB::statement("ALTER SEQUENCE slides_id_seq RESTART WITH 5");
    }
}
