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
                'name' => ' PVC Figure',
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568220984/category1.jpg',
                'description' => 'PVC figure, đúng như tên gọi của nó, là những figure được làm từ nhựa tổng hợp PVC với tỉ lệ thường thấy là từ 1/8 đến 1/6. 
                Figure vừa to, vừa được thiết kế tinh xảo, các đường nét bo tròn nuột nà, màu sắc thì lại đẹp, dễ nhìn mà rất bền.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 2,
                'name' => 'Nendoroid',
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568220963/category2.jpg',
                'description' => 'Nendoroid là một dạng mới của PVC figure nhưng với kích thước nhỏ hơn, vào khoảng 1/16.
                   Điểm mạnh của loại này là chúng có thể biến đổi theo ý thích người xem, mang nét dễ thương nhiều hơn. ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 3,
                'name' => 'Figma',
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/v1568221050/category3.jpg',
                'description' => 'Figma là sự kết hợp giữa PVC figure và Nendoroid với các bộ phận có thể thay thế, tùy biến được.
                  Bằng việc gắn những khớp nhựa tròn ở tay, chân nên việc thay đổi tư thế figma cũng dễ dàng hơn trước rất là nhiều.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 4,
                'name' => 'Revoltech.',
                'thumbnail' => 'https://res.cloudinary.com/dkzqu5nh2/image/upload/c_scale,h_800,w_600/v1568221023/category4.jpg',
                'description' => 'Revoltech  có giá thành rất rẻ, bền, với các khớp “revolver” giúp cho việc chuyển động tay, chân.
                  Ý tưởng làm các khớp “revolver” này được dựa theo chú người rối Pinocchio của phim hoạt hình cùng tên.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],

        ]);
        DB::statement("ALTER SEQUENCE categories_id_seq RESTART WITH 4");
    }
}
