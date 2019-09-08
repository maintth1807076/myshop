<?php

use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            ['id'=>101,
                'name'=>'yasuo',
                'price'=>200000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQifRudHzc2dlaqjjATem5WRb2UfI-r4Pe8MXbjmSpR96UPI46',
                'description'=>'giá rẻ',
                'detail'=>'yasuo',
                'id_categories'=>2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            ['id'=>102,
                'name'=>'olaf',
                'price'=>200000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQifRudHzc2dlaqjjATem5WRb2UfI-r4Pe8MXbjmSpR96UPI46',
                'description'=>'giá rẻ',
                'detail'=>'yasuo',
                'id_categories'=>2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id'=>100,
            'name'=>'riven',
            'price'=>200000,
            'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQifRudHzc2dlaqjjATem5WRb2UfI-r4Pe8MXbjmSpR96UPI46',
            'description'=>'giá rẻ',
            'detail'=>'yasuo',
            'id_categories'=>1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ],
            ['id'=>103,
                'name'=>'fizz',
                'price'=>2000000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzF5Pk95bCzPDWUrbom6QF6a1-hm5EGVbYcoisifhGzsld0aCQ',
                'description'=>'giá rẻ',
                'detail'=>'yasuo',
                'id_categories'=>2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            ['id'=>104,
                'name'=>'katarina',
                'price'=>2000000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQifRudHzc2dlaqjjATem5WRb2UfI-r4Pe8MXbjmSpR96UPI46',
                'description'=>'giá rẻ',
                'detail'=>'yasuo',
                'id_categories'=>2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            ['id'=>105,
                'name'=>'leesin',
                'price'=>2000000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQifRudHzc2dlaqjjATem5WRb2UfI-r4Pe8MXbjmSpR96UPI46',
                'description'=>'giá rẻ',
                'detail'=>'yasuo',
                'id_categories'=>2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            ['id'=>106,
                'name'=>'pyke',
                'price'=>2000000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQifRudHzc2dlaqjjATem5WRb2UfI-r4Pe8MXbjmSpR96UPI46',
                'description'=>'giá rẻ',
                'detail'=>'yasuo',
                'id_categories'=>2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            ['id'=>107,
                'name'=>'pantheon',
                'price'=>2000000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQifRudHzc2dlaqjjATem5WRb2UfI-r4Pe8MXbjmSpR96UPI46',
                'description'=>'giá rẻ',
                'detail'=>'yasuo',
                'id_categories'=>2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            ['id'=>108,
                'name'=>'nasus',
                'price'=>2000000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQifRudHzc2dlaqjjATem5WRb2UfI-r4Pe8MXbjmSpR96UPI46',
                'description'=>'giá rẻ',
                'detail'=>'yasuo',
                'id_categories'=>2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            ['id'=>109,
                'name'=>'varus',
                'price'=>2000000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQifRudHzc2dlaqjjATem5WRb2UfI-r4Pe8MXbjmSpR96UPI46',
                'description'=>'giá rẻ',
                'detail'=>'yasuo',
                'id_categories'=>2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            ['id'=>110,
                'name'=>'ChoGath ',
                'price'=>2000000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQifRudHzc2dlaqjjATem5WRb2UfI-r4Pe8MXbjmSpR96UPI46',
                'description'=>'giá rẻ',
                'detail'=>'yasuo',
                'id_categories'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
