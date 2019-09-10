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
                'thumbnail' => 'http://otakushop.com.vn/upload/slideshow/832394432520815_1301.2232415902x500.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 2,
                'product_id' => 1,
                'thumbnail' => 'https://res.cloudinary.com/kuramakyubi/image/upload/v1567952761/k4tpmtiu6wynk70gp9qp.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 3,
                'product_id' => 1,
                'thumbnail' => 'https://res.cloudinary.com/kuramakyubi/image/upload/v1567611778/gesawdfbptmurzko20xp.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 4,
                'product_id' => 2,
                'thumbnail' => 'https://res.cloudinary.com/kuramakyubi/image/upload/v1567611778/gesawdfbptmurzko20xp.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 5,
                'product_id' => 3,
                'thumbnail' => 'https://res.cloudinary.com/kuramakyubi/image/upload/v1567611778/gesawdfbptmurzko20xp.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 6,
                'product_id' => 5,
                'thumbnail' => 'https://res.cloudinary.com/kuramakyubi/image/upload/v1567611778/gesawdfbptmurzko20xp.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ], [
                'id' => 7,
                'product_id' => 4,
                'thumbnail' => 'https://res.cloudinary.com/kuramakyubi/image/upload/v1567611778/gesawdfbptmurzko20xp.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 8,
                'product_id' => 4,
                'thumbnail' => 'https://res.cloudinary.com/kuramakyubi/image/upload/v1567611778/gesawdfbptmurzko20xp.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 9,
                'product_id' => 6,
                'thumbnail' => 'https://i.ytimg.com/vi/3fumBcKC6RE/maxresdefault.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
        ]);
        DB::statement("ALTER SEQUENCE product_details_id_seq RESTART WITH 20");
    }
}
