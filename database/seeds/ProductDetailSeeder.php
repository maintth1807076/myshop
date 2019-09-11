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
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568223807/PVC-figure-product1-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 2,
                'product_id' => 1,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568223567/PVC-figure-product1-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 3,
                'product_id' => 1,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568223719/PVC-figure-product1-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 4,
                'product_id' => 1,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568223853/PVC-figure-product1-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 5,
                'product_id' => 2,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568225941/PVC-figure-product2-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 6,
                'product_id' => 2,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568226031/PVC-figure-product2-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 7,
                'product_id' => 2,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568226067/PVC-figure-product2-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 8,
                'product_id' => 2,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568226123/PVC-figure-product2-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 9,
                'product_id' => 3,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568226805/PVC-figure-product3-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 10,
                'product_id' => 3,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568226842/PVC-figure-product3-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 11,
                'product_id' => 3,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568226894/PVC-figure-product3-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 12,
                'product_id' => 3,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568226950/PVC-figure-product3-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 13,
                'product_id' => 4,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568227906/PVC-figure-product4-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 14,
                'product_id' => 4,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568227906/PVC-figure-product4-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 15,
                'product_id' => 4,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568227906/PVC-figure-product4-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],

            [
                'id' => 16,
                'product_id' => 4,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568227906/PVC-figure-product4-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],

            [
                'id' => 17,
                'product_id' => 5,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228375/PVC-figure-product5-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],

            [
                'id' => 18,
                'product_id' => 5,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228375/PVC-figure-product5-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 19,
                'product_id' => 5,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228375/PVC-figure-product5-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],

            [
                'id' => 20,
                'product_id' => 5,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228375/PVC-figure-product5-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 21,
                'product_id' => 6,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228695/PVC-figure-product6-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 22,
                'product_id' => 6,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228695/PVC-figure-product6-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 23,
                'product_id' => 6,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228695/PVC-figure-product6-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 24,
                'product_id' => 6,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228695/PVC-figure-product6-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 25,
                'product_id' => 7,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228939/PVC-figure-product7-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 26,
                'product_id' => 7,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228939/PVC-figure-product7-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 27,
                'product_id' => 7,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228939/PVC-figure-product7-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 28,
                'product_id' => 7,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228939/PVC-figure-product7-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 29,
                'product_id' => 8,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568229358/PVC-figure-product8-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 30,
                'product_id' => 8,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568229358/PVC-figure-product8-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 31,
                'product_id' => 8,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568229358/PVC-figure-product8-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 32,
                'product_id' => 8,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568229358/PVC-figure-product8-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 33,
                'product_id' => 9,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568229753/PVC-figure-product9-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 34,
                'product_id' => 9,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568229753/PVC-figure-product9-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 35,
                'product_id' => 9,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568229753/PVC-figure-product9-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 36,
                'product_id' => 9,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568229753/PVC-figure-product9-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 37,
                'product_id' => 10,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568230095/PVC-figure-product10-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 38,
                'product_id' => 10,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568230095/PVC-figure-product10-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 39,
                'product_id' => 10,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568230095/PVC-figure-product10-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 40,
                'product_id' => 10,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568230095/PVC-figure-product10-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 41,
                'product_id' => 11,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product1-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 42,
                'product_id' => 11,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product1-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 43,
                'product_id' => 11,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product1-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 44,
                'product_id' => 11,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product1-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 45,
                'product_id' => 12,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product2-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 46,
                'product_id' => 12,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product2-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 47,
                'product_id' => 12,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product2-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 48,
                'product_id' => 12,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product2-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 49,
                'product_id' => 13,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product3-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 50,
                'product_id' => 13,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product3-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 51,
                'product_id' => 13,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product3-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 52,
                'product_id' => 13,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product3-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 53,
                'product_id' => 14,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product4-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 54,
                'product_id' => 14,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product4-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 55,
                'product_id' => 14,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product4-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 56,
                'product_id' => 14,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product4-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 57,
                'product_id' => 15,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product5-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 58,
                'product_id' => 15,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product5-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 59,
                'product_id' => 15,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product5-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 60,
                'product_id' => 15,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product5-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 61,
                'product_id' => 16,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product6-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 62,
                'product_id' => 16,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product6-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 63,
                'product_id' => 16,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product6-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 64,
                'product_id' => 16,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product6-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 65,
                'product_id' => 17,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product7-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 66,
                'product_id' => 17,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product7-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 67,
                'product_id' => 17,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product7-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 68,
                'product_id' => 17,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product2-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 69,
                'product_id' => 18,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product8-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 70,
                'product_id' => 18,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product8-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 71,
                'product_id' => 18,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product8-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 72,
                'product_id' => 18,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product8-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 73,
                'product_id' => 19,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product9-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 74,
                'product_id' => 19,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product9-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 75,
                'product_id' => 19,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product9-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 76,
                'product_id' => 19,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product9-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 77,
                'product_id' => 20,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product10-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 78,
                'product_id' => 20,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product10-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 79,
                'product_id' => 20,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product10-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 80,
                'product_id' => 20,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232129/Nendoroid-product10-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 81,
                'product_id' => 21,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product1-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 82,
                'product_id' => 21,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product1-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 83,
                'product_id' => 21,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product1-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 84,
                'product_id' => 21,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product1-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 85,
                'product_id' => 22,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product1-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 86,
                'product_id' => 22,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product2-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 87,
                'product_id' => 22,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product2-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 88,
                'product_id' => 22,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product2-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],

        ]);
        DB::statement("ALTER SEQUENCE product_details_id_seq RESTART WITH 50");
    }
}
