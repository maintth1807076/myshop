<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Mô hình tĩnh ',
                'thumbnail' => 'https://i.pinimg.com/236x/07/04/a4/0704a4b819930ee0a7c4aa66c3da3a00--figurine-manga-anime-figures.jpg',
                'description' => 'đẹp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 2,
                'name' => 'Mô hình động',
                'thumbnail' => 'https://i.pinimg.com/236x/07/04/a4/0704a4b819930ee0a7c4aa66c3da3a00--figurine-manga-anime-figures.jpg',
                'description' => 'đẹp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],

        ]);
        DB::statement("ALTER SEQUENCE categories_id_seq RESTART WITH 4");
    }
}
