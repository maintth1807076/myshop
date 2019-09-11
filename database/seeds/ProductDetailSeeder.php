<?php

use Illuminate\Database\Seeder;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_details')->truncate();
        DB::table('product_details')->insert([
            [
                'id' => 1,
                'product_id' => 1,
                'thumbnail' => 'https://i.pinimg.com/236x/07/04/a4/0704a4b819930ee0a7c4aa66c3da3a00--figurine-manga-anime-figures.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 2,
                'product_id' => 1,
                'thumbnail' => 'https://i.pinimg.com/236x/07/04/a4/0704a4b819930ee0a7c4aa66c3da3a00--figurine-manga-anime-figures.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 3,
                'product_id' => 1,
                'thumbnail' => 'https://i.pinimg.com/236x/07/04/a4/0704a4b819930ee0a7c4aa66c3da3a00--figurine-manga-anime-figures.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 4,
                'product_id' => 2,
                'thumbnail' => 'https://i.pinimg.com/236x/07/04/a4/0704a4b819930ee0a7c4aa66c3da3a00--figurine-manga-anime-figures.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 5,
                'product_id' => 3,
                'thumbnail' => 'https://i.pinimg.com/236x/07/04/a4/0704a4b819930ee0a7c4aa66c3da3a00--figurine-manga-anime-figures.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],

        ]);
        DB::statement("ALTER SEQUENCE product_details_id_seq RESTART WITH 20");
    }
}
