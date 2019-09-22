<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('orders')->truncate();
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'total_price' => 1289000,
                'ship_name' => 'Hoa',
                'ship_address' => ' số 54 Liễu Giai, quận Ba Đình, Ba Đình, Hà Nội',
                'ship_phone' => '0438277178',
                'created_at' => '2019-08-01 02:07:01',

            ],
            [
                'total_price' => 4050000,
                'ship_name' => 'Hùng',
                'ship_address' => 'Thanh Liệt, Thanh Trì, Hà Nội',
                'ship_phone' => '048230230',
                'created_at' => '2019-08-13 13:07:00',
            ],
            [
                'total_price' => 1495000,
                'ship_name' => 'Hải',
                'ship_address' => 'Khu Công nghiệp Đồng Văn, huyện Duy Tiên, tỉnh Hà Nam, Duy Tiên, Hà Nam',
                'ship_phone' => '0432575757',
                'created_at' => '2019-08-06 12:30:30',
            ],
            [
                'total_price' => 3010000,
                'ship_name' => 'Hòa',
                'ship_address' => ' quận Long Biên, Hà Nội, Ba Đình, Hà Nội',
                'ship_phone' => '0438736736',
                'created_at' => '2019-09-09 15:25:21',
            ],
            [
                'total_price' => 8679000,
                'ship_name' => 'Chiến',
                'ship_address' => 'Ngọc Khánh, Ba Đình, Hà Nội',
                'ship_phone' => '02253567567',
                'created_at' => '2019-09-10 17:40:22',
            ],
            [
                'total_price' => 2880000,
                'ship_name' => 'Thảo',
                'ship_address' => 'Nguyễn Văn Cừ, Long Biên, Hà Nội',
                'ship_phone' => ' 02253525252',
                'created_at' => '2019-09-22 18:31:05',
            ],
            [
                'total_price' => 2586000,
                'ship_name' => 'Thủy',
                'ship_address' => 'Hoàng Đạo Thúy, Thanh Xuân, Hà Nội',
                'ship_phone' => '02253778778',
                'created_at' => '2019-09-14 15:36:07',
            ],
            [
                'total_price' => 3200000,
                'ship_name' => 'Cường',
                'ship_address' => ' Đào Duy Từ, Hoàn Kiếm, Hà Nội',
                'ship_phone' => '02374354374',
                'created_at' => '2019-07-15 08:45:41',
            ],
            [
                'total_price' => 2870000,
                'ship_name' => 'Đạt',
                'ship_address' => ' Ngô Thì Nhậm, Hà Đông, Hà Nội',
                'ship_phone' => '02374354374',
                'created_at' => '2019-07-20 09:27:36',
            ],
            [
                'total_price' => 9440000,
                'ship_name' => ' An',
                'ship_address' => ' Lý Tự Trọng, Hồng Bàng, Hải Phòng',
                'ship_phone' => '02374354374',
                'created_at' => '2019-07-21 09:30:01',
            ],
            [
                'total_price' => 2676000,
                'ship_name' => 'Hoa',
                'ship_address' => 'Hoàng Quốc Việt, Cầu Giấy, Hà Nội',
                'ship_phone' => '02374354374',
                'created_at' => '2019-07-27 10:47:01',

            ],
            [
                'total_price' => 3244000,
                'ship_name' => 'Hùng',
                'ship_address' => ' Lạc Trung, Hai Bà Trưng, Hà Nội',
                'ship_phone' => '02374354374',
                'created_at' => '2019-08-30 19:07:01',
            ],
            [
                'total_price' => 4330000,
                'ship_name' => 'Hải',
                'ship_address' => 'Láng Hạ, Đống Đa, Hà Nội',
                'ship_phone' => '02374354374',
                'created_at' => '2019-08-28 20:33:01',
            ],
            [
                'total_price' => 2092000,
                'ship_name' => 'Hòa',
                'ship_address' => ' Bắc Linh Đàm, Hoàng Mai, Hà Nội',
                'ship_phone' => '02374354374',
                'created_at' => '2019-06-12 13:43:34',
            ],
            [
                'total_price' => 9550000,
                'ship_name' => 'Chiến',
                'ship_address' => 'Đường Hàm Nghi, Từ Liêm, Hà Nội',
                'ship_phone' => '02374354374',
                'created_at' => '2019-06-05 20:18:44',
            ],
            [
                'total_price' => 3069000,
                'ship_name' => 'Thảo',
                'ship_address' => 'Lê Văn Lương, Thanh Xuân, Hà Nội',
                'ship_phone' => '02374354374',
                'created_at' => '2019-09-20 17:45:55',
            ],
            [
                'total_price' => 9870000,
                'ship_name' => 'Thủy',
                'ship_address' => '191 Bà Triệu, Hai Bà Trưng, Hà Nội',
                'ship_phone' => '02374354374',
                'created_at' => '2019-07-24 18:25:46',
            ],
            [
                'total_price' => 2500000,
                'ship_name' => 'Cường',
                'ship_address' => '356 Nguyễn Trãi, Thanh Xuân, Hà Nội',
                'ship_phone' => '0212334567',
                'created_at' => '2019-08-21 07:07:01',
            ],
            [
                'total_price' => 3680000,
                'ship_name' => 'Đạt',
                'ship_address' => 'khu đô thị Mỹ Đình, Mễ Trì, phường Mỹ Đình 1, Từ Liêm, Hà Nội',
                'ship_phone' => '0345678124',
                'created_at' => '2019-08-27 14:05:00',
            ],
            [
                'total_price' => 1862000,
                'ship_name' => ' An',
                'ship_address' => 'Hoàng Minh Giám, P. Trung hòa, Cầu Giấy, Hà Nội',
                'ship_phone' => '023123987',
                'created_at' => '2019-07-23 15:44:17',
            ]

        ]);
    }
}
