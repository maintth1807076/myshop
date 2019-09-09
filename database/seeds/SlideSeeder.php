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
                'url' => 'http://otakushop.com.vn/upload/slideshow/832394432520815_1301.2232415902x500.png',
                'content' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 2,
                'url' => 'http://otakushop.com.vn/upload/slideshow/567682701517304_1366x455.33333333333.jpg',
                'content' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 3,
                'url' => 'https://theme.hstatic.net/1000160337/1000373353/14/psl_1_r1_slide_img_4.jpg?v=834',
                'content' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 4,
                'url' => 'https://theme.hstatic.net/1000160337/1000373353/14/backgrounf_footer.jpg?v=82',
                'content' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
        ]);
        DB::statement("ALTER SEQUENCE slides_id_seq RESTART WITH 5");
    }
}
