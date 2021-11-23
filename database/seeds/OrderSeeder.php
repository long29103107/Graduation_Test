<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        [
            "fullname" => "Nguyễn Hoàng Long",
            "email" => "0306181138@caothang.edu.vn",
            "phone" => "1231231231",
            "address" => "3/53 Thành Thái, P14, Quận 10, TP HCM",
            "total" => 190000.0,
            "note" => "Ghi chú",
            'created_at' => Carbon::create(2021, 1, 5, 0, 0, 0)
        ],
        [
            "fullname" => "Nguyễn Hoàng Long",
            "email" => "long29103107@gmail.com",
            "phone" => "1231231231",
            "address" => "7/20 Thành Thái, P14, Quận 10, TP HCM",
            "total" => 525000.0,
            "note" => "Ghi chú",
            'created_at' => Carbon::create(2021, 2, 5, 0, 0, 0)
          ],
          [
            "fullname" => "Nguyễn Hoàng Long",
            "email" => "long@gmail.com",
            "phone" => "1231231231",
            "address" => "7/20 Thành Thái, P14, Quận 10, TP HCM",
            "total" => 150000.0,
            "note" => "Ghi chú",
            'created_at' => Carbon::create(2021, 3, 5, 0, 0, 0)
          ],
          [
            "fullname" => "Nguyễn Hoàng Long",
            "email" => "long@gmail.com",
            "phone" => "1231231231",
            "address" => "992 Phạm Văn Đồng, khu phố 1, Thủ Đức, TPHCM",
            "total" => 810000.0,
            "note" => "Ghi chú",
            'created_at' => Carbon::create(2021, 4, 5, 0, 0, 0)
          ],
          [
            "fullname" => "Trịnh Thuỳ Vương",
            "email" => "vuong@gmail.com",
            "phone" => "1122334455",
            "address" => "992 Phạm Văn Đồng, khu phố 1, Thủ Đức, TPHCM",
            "total" => 400000.0,
            "note" => "ghi chú",
            'created_at' => Carbon::create(2021, 5, 5, 0, 0, 0)
          ],
          [
            "fullname" => "Nguyễn Thị Thảo",
            "email" => "thap@gmail.com",
            "phone" => "1122334455",
            "address" => "965 Lạc Long Quân, Phường 11, Tân Bình, Thành phố Hồ Chí Minh",
            "total" => 300000.0,
            "note" => null,
            'created_at' => Carbon::create(2021, 6, 5, 0, 0, 0)
          ],
          [
            "fullname" => "Nguyễn Thị Thuỳ",
            "email" => "thuy@gmail.com",
            "phone" => "1122334455",
            "address" => "965 Lạc Long Quân, Phường 11, Tân Bình, Thành phố Hồ Chí Minh",
            "total" => 640000.0,
            "note" => null,
            'created_at' => Carbon::create(2021, 1, 5, 0, 0, 0)
          ],
          [
            "fullname" => "Nguyễn Thị Thuỳ",
            "email" => "thuy@gmail.com",
            "phone" => "1122334455",
            "address" => "538 Cách Mạng Tháng Tám, Phường 11, Quận 3, Thành phố Hồ Chí Minh",
            "total" => 1200000.0,
            "note" => "Giao giờ hành chính",
            'created_at' => Carbon::create(2021, 2, 5, 0, 0, 0)
          ],
          [
            "fullname" => "Nguyễn Thị Mai",
            "email" => "mai@gmail.com",
            "phone" => "1122334455",
            "address" => "538 Cách Mạng Tháng Tám, Phường 11, Quận 3, Thành phố Hồ Chí Minh",
            "total" => 890000.0,
            "note" => "Giao giờ hành chính",
            'created_at' => Carbon::create(2021, 3, 5, 0, 0, 0)
          ],
          [
            "fullname" => "Nguyễn Thị Cẩm Tú",
            "email" => "camtu@gmail.com",
            "phone" => "1122334455",
            "address" => "3/53 18-20 Đồng Đen, Phường 13, Tân Bình, Thành phố Hồ Chí Minh, P14, Quận 10, TP HCM",
            "total" => 600000.0,
            "note" => null,
            'created_at' => Carbon::create(2021, 4, 5, 0, 0, 0)
          ],
          [
            "fullname" => "Nguyễn Hoàng Nam",
            "email" => "nam@gmail.com",
            "phone" => "1122334455",
            "address" => "3/53 18-20 Đồng Đen, Phường 13, Tân Bình, Thành phố Hồ Chí Minh, P14, Quận 10, TP HCM",
            "total" => 520000.0,
            "note" => null,
            'created_at' => Carbon::create(2021, 5, 5, 0, 0, 0)
          ],
          [
            "fullname" => "Nguyễn Hoài Khánh",
            "email" => "khanh@gmail.com",
            "phone" => "1122334455",
            "address" => "737 Hẻm 876 Cách Mạng Tháng Tám, Phường 6, Tân Bình, Thành phố Hồ Chí Minh",
            "total" => 150000.0,
            "note" => null,
            'created_at' => Carbon::create(2021, 6, 11, 0, 0, 0)
          ]
        ];
        DB::table('orders')->insert($data);
    }
}
