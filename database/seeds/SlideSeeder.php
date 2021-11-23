<?php

use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
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
                'user_id' => 1,
                'image' =>'/images/slide/1.jpg',
                'title' => 'Sản phẩm bán chạy nhất tháng 10',
                'path' => 'http://localhost:8000/product/19/detail',
                'slide_content' => 'Sản phẩm chất lượng tốt, được mua nhiều nhất tháng 10',
            ],
            [
                'user_id' => 1,
                'image' =>'/images/slide/2.jpg',
                'title' => 'Sản phẩm mới nhất tháng 11',
                'path' => 'http://localhost:8000/product/14/detail',
                'slide_content' => 'Sản phẩm được thiết kế tỉ mỉ, có thể là sản phẩm được ưa chuộng tháng 11',
            ],
            [
                'user_id' => 1,
                'image' =>'/images/slide/3.jpg',
                'title' => 'Sản phẩm có mẫu thiết kế đặc biệt',
                'path' => 'http://localhost:8000/product/11/detail',
                'slide_content' => 'Mặt hàng được thiết kế từ nhà thiết kế nổi tiếng, có mẫu thiết kế bắt mắt',
            ]
        ];
        DB::table('slides')->insert($data);
    }
}
