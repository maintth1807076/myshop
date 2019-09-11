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
                'url' => 'https://i.pinimg.com/236x/07/04/a4/0704a4b819930ee0a7c4aa66c3da3a00--figurine-manga-anime-figures.jpg',
                'content' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 2,
                'url' => 'https://i.pinimg.com/236x/07/04/a4/0704a4b819930ee0a7c4aa66c3da3a00--figurine-manga-anime-figures.jpg',
                'content' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 3,
                'url' => 'https://i.pinimg.com/236x/07/04/a4/0704a4b819930ee0a7c4aa66c3da3a00--figurine-manga-anime-figures.jpg',
                'content' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
        ]);
        DB::statement("ALTER SEQUENCE slides_id_seq RESTART WITH 5");
    }
}
