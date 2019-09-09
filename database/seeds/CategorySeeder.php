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
                'thumbnail' => 'http://otakushop.com.vn/upload/slideshow/832394432520815_1301.2232415902x500.png',
                'description' => 'đẹp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 2,
                'name' => 'Mô hình động',
                'thumbnail' => 'http://otakushop.com.vn/upload/slideshow/832394432520815_1301.2232415902x500.png',
                'description' => 'đẹp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],

        ]);
        DB::statement("ALTER SEQUENCE categories_id_seq RESTART WITH 4");
    }
}
