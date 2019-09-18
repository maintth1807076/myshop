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
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568487069/PVC-figure-product2-img1.jpg',
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
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568225941/PVC-figure-product2-img3.jpg',
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
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568486435/PVC-figure-product3-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 10,
                'product_id' => 3,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568486484/PVC-figure-product3-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 11,
                'product_id' => 3,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568486517/PVC-figure-product3-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 12,
                'product_id' => 3,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568486572/PVC-figure-product3-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 13,
                'product_id' => 4,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568227973/PVC-figure-product4-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 14,
                'product_id' => 4,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568227939/PVC-figure-product4-img2.jpg',
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
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228015/PVC-figure-product4-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 17,
                'product_id' => 5,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568487335/PVC-figure-product5-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 18,
                'product_id' => 5,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228268/PVC-figure-product5-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 19,
                'product_id' => 5,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568228339/PVC-figure-product5-img3.jpg',
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
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568489279/PVC-figure-product6-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 22,
                'product_id' => 6,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568489312/PVC-figure-product6-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 23,
                'product_id' => 6,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568489341/PVC-figure-product6-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 24,
                'product_id' => 6,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568489373/PVC-figure-product6-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 25,
                'product_id' => 7,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568485833/PVC-figure-product7-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 26,
                'product_id' => 7,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568485963/PVC-figure-product7-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 27,
                'product_id' => 7,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568486000/PVC-figure-product7-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 28,
                'product_id' => 7,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568486029/PVC-figure-product7-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 29,
                'product_id' => 8,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568229329/PVC-figure-product8-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 30,
                'product_id' => 8,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568229157/PVC-figure-product8-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 31,
                'product_id' => 8,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568229219/PVC-figure-product8-img3.jpg',
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
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568229725/PVC-figure-product9-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 34,
                'product_id' => 9,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568229696/PVC-figure-product9-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 35,
                'product_id' => 9,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568229662/PVC-figure-product9-img3.jpg',
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
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568485387/PVC-figure-product10-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 38,
                'product_id' => 10,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568485434/PVC-figure-product10-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 39,
                'product_id' => 10,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568485478/PVC-figure-product10-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 40,
                'product_id' => 10,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568485509/PVC-figure-product10-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 41,
                'product_id' => 11,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568230587/Nendoroid-product1-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 42,
                'product_id' => 11,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568230639/Nendoroid-product1-img2.jpg',
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
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232097/Nendoroid-product2-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 46,
                'product_id' => 12,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568232015/Nendoroid-product2-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 47,
                'product_id' => 12,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568231950/Nendoroid-product2-img3.jpg',
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
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568234099/Nendoroid-product6-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 62,
                'product_id' => 16,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568234068/Nendoroid-product6-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 63,
                'product_id' => 16,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568234124/Nendoroid-product6-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 64,
                'product_id' => 16,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568234166/Nendoroid-product6-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 65,
                'product_id' => 17,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568234336/Nendoroid-product7-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 66,
                'product_id' => 17,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568234295/Nendoroid-product7-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 67,
                'product_id' => 17,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568234375/Nendoroid-product7-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 68,
                'product_id' => 17,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568234410/Nendoroid-product7-img4.jpg',
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
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568235110/Nendoroid-product9-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 74,
                'product_id' => 19,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568235051/Nendoroid-product9-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 75,
                'product_id' => 19,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568235080/Nendoroid-product9-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 76,
                'product_id' => 19,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568235019/Nendoroid-product9-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 77,
                'product_id' => 20,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568235275/Nendoroid-product10-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 78,
                'product_id' => 20,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568235246/Nendoroid-product10-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 79,
                'product_id' => 20,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568235308/Nendoroid-product10-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 80,
                'product_id' => 20,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568235343/Nendoroid-product10-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 81,
                'product_id' => 21,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568235660/Figma-product1-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 82,
                'product_id' => 21,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568235621/Figma-product1-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 83,
                'product_id' => 21,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568235689/Figma-product1-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 84,
                'product_id' => 21,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568235714/Figma-product1-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 85,
                'product_id' => 22,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568236171/Figma-product2-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 86,
                'product_id' => 22,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568236203/Figma-product2-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 87,
                'product_id' => 22,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568236230/Figma-product2-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 88,
                'product_id' => 22,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568236264/Figma-product2-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 89,
                'product_id' => 23,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568236522/Figma-product3-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 90,
                'product_id' => 23,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568236584/Figma-product3-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 91,
                'product_id' => 23,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568236615/Figma-product3-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 92,
                'product_id' => 23,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568236658/Figma-product3-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 93,
                'product_id' => 24,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product4-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 94,
                'product_id' => 24,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product4-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 95,
                'product_id' => 24,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product4-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 96,
                'product_id' => 24,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product4-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 97,
                'product_id' => 25,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product5-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 98,
                'product_id' => 25,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product5-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 99,
                'product_id' => 25,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product5-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 100,
                'product_id' => 25,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product5-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 101,
                'product_id' => 26,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product6-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 102,
                'product_id' => 26,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product6-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 103,
                'product_id' => 26,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product6-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 104,
                'product_id' => 26,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product6-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 105,
                'product_id' => 27,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product7-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 106,
                'product_id' => 27,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product7-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 107,
                'product_id' => 27,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-produc7-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 108,
                'product_id' => 27,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product7-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 109,
                'product_id' => 28,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product8-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 110,
                'product_id' => 28,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product8-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 111,
                'product_id' => 28,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product8-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 112,
                'product_id' => 28,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product8-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 113,
                'product_id' => 29,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238531/Figma-product9-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 114,
                'product_id' => 29,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/upload/v1568238472/Figma-product9-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 115,
                'product_id' => 29,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238499/Figma-product9-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 116,
                'product_id' => 29,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238446/Figma-product9-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 117,
                'product_id' => 30,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238621/Figma-product10-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 118,
                'product_id' => 30,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238597/Figma-product10-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 119,
                'product_id' => 30,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238572/Figma-product10-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 120,
                'product_id' => 30,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568238643/Figma-product10-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 121,
                'product_id' => 31,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268603/Revoltech-product1-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 122,
                'product_id' => 31,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268536/Revoltech-product1-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 123,
                'product_id' => 31,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268461/Revoltech-product1-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 124,
                'product_id' => 31,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268650/Revoltech-product1-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 125,
                'product_id' => 32,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568270209/Revoltech-product2-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 126,
                'product_id' => 32,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568270176/Revoltech-product2-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 127,
                'product_id' => 32,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568270137/Revoltech-product2-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 128,
                'product_id' => 32,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568270235/Revoltech-product2-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 129,
                'product_id' => 33,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568270472/Revoltech-product3-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 130,
                'product_id' => 33,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568270415/Revoltech-product3-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 131,
                'product_id' => 33,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568270374/Revoltech-product3-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 132,
                'product_id' => 33,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568270504/Revoltech-product3-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 133,
                'product_id' => 34,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568270901/Revoltech-product4-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 134,
                'product_id' => 34,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268650/Revoltech-product4-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 135,
                'product_id' => 34,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568270926/Revoltech-product4-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 136,
                'product_id' => 34,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568270954/Revoltech-product4-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 137,
                'product_id' => 35,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268650/Revoltech-product5-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 138,
                'product_id' => 35,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268650/Revoltech-product5-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 139,
                'product_id' => 35,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268650/Revoltech-product5-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 140,
                'product_id' => 35,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268650/Revoltech-product5-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 141,
                'product_id' => 36,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268650/Revoltech-product6-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 142,
                'product_id' => 36,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268650/Revoltech-product6-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 143,
                'product_id' => 36,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268650/Revoltech-product6-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 144,
                'product_id' => 36,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268650/Revoltech-product6-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 145,
                'product_id' => 37,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568272311/Revoltech-product7-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 146,
                'product_id' => 37,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568272283/Revoltech-product7-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 147,
                'product_id' => 37,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568272339/Revoltech-product7-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 148,
                'product_id' => 37,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568272364/Revoltech-product7-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 149,
                'product_id' => 38,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568272540/Revoltech-product8-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 150,
                'product_id' => 38,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568272511/Revoltech-product8-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 151,
                'product_id' => 38,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568272570/Revoltech-product8-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 152,
                'product_id' => 38,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568272602/Revoltech-product8-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 153,
                'product_id' => 39,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268650/Revoltech-product9-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 154,
                'product_id' => 39,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268650/Revoltech-product9-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 155,
                'product_id' => 39,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268650/Revoltech-product9-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 156,
                'product_id' => 39,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568268650/Revoltech-product9-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 157,
                'product_id' => 40,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568273112/Revoltech-product10-img1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 158,
                'product_id' => 40,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568273082/Revoltech-product10-img2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 159,
                'product_id' => 40,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568482944/Revoltech-product10-img3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 160,
                'product_id' => 40,
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568273172/Revoltech-product10-img4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ]
        ]);
        DB::statement("ALTER SEQUENCE product_details_id_seq RESTART WITH 161");
    }
}
