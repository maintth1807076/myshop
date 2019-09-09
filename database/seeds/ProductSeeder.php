<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'mô hình 1',
                'price' => '5000',
                'thumbnail' => 'http://otakushop.com.vn/upload/slideshow/832394432520815_1301.2232415902x500.png',
                'description' => 'hi',
                'description' => 'hi',
                'detail' => 'hi',
                'category_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 2,
                'name' => 'mô hình 2',
                'price' => '5000',
                'thumbnail' => 'http://otakushop.com.vn/upload/slideshow/832394432520815_1301.2232415902x500.png',
                'description' => 'hi',
                'description' => 'hi',
                'detail' => 'hi',
                'category_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 3,
                'name' => 'mô hình 3',
                'price' => '5000',
                'thumbnail' => 'http://otakushop.com.vn/upload/slideshow/832394432520815_1301.2232415902x500.png',
                'description' => 'hi',
                'description' => 'hi',
                'detail' => 'hi',
                'category_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 4,
                'name' => 'mô hình 4',
                'price' => '5000',
                'thumbnail' => 'http://otakushop.com.vn/upload/slideshow/832394432520815_1301.2232415902x500.png',
                'description' => 'hi',
                'description' => 'hi',
                'detail' => 'hi',
                'category_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 5,
                'name' => 'mô hình 5',
                'price' => '5000',
                'thumbnail' => 'http://otakushop.com.vn/upload/slideshow/832394432520815_1301.2232415902x500.png',
                'description' => 'hi',
                'description' => 'hi',
                'detail' => 'hi',
                'category_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 6,
                'name' => 'mô hình 6',
                'price' => '5000',
                'thumbnail' => 'http://otakushop.com.vn/upload/slideshow/832394432520815_1301.2232415902x500.png',
                'description' => 'hi',
                'description' => 'hi',
                'detail' => 'hi',
                'category_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 7,
                'name' => 'mô hình 7',
                'price' => '5000',
                'thumbnail' => 'http://otakushop.com.vn/upload/slideshow/832394432520815_1301.2232415902x500.png',
                'description' => 'hi',
                'description' => 'hi',
                'detail' => 'hi',
                'category_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 8,
                'name' => 'mô hình 8',
                'price' => '5000',
                'thumbnail' => 'http://otakushop.com.vn/upload/slideshow/832394432520815_1301.2232415902x500.png',
                'description' => 'hi',
                'description' => 'hi',
                'detail' => 'hi',
                'category_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
        ]);
        DB::statement("ALTER SEQUENCE products_id_seq RESTART WITH 10");
    }
}
