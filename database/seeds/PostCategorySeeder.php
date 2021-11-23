<?php

use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
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
                'post_name' => 'Tin khuyến mãi',
                'post_path' => 'tin-khuyen-mai',
                'status'=> 1,
            ],
            [
                'post_name' => 'Tin tức - Thời trang',
                'post_path' => 'tin-tuc-thoi-trang',
                'status'=> 1,
            ],
        ];
        DB::table('post_cate')->insert($data);
    }
}
