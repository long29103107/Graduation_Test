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
        //
        $data = [
            [
                'name' => 'Đồ nam'
            ],
            [
                'name' => 'Đồ nữ',
            ],
            [
                'name' => 'Unisex'
            ],
            // [
            //     'name' => 'Đồ nam'
            // ],
            // [
            //     'name' => 'Đồ nữ',
            // ],
            // [
            //     'name' => 'Unisex'
            // ],
            // [
            //     'name' => 'Đồ nam'
            // ],
            // [
            //     'name' => 'Đồ nữ',
            // ],
            // [
            //     'name' => 'Unisex'
            // ],
            // [
            //     'name' => 'Đồ nam'
            // ],
            // [
            //     'name' => 'Đồ nữ',
            // ],
            // [
            //     'name' => 'Unisex'
            // ],
            // [
            //     'name' => 'Đồ nam'
            // ],
            // [
            //     'name' => 'Đồ nữ',
            // ],
            // [
            //     'name' => 'Unisex'
            // ],
            // [
            //     'name' => 'Đồ nam'
            // ],
            // [
            //     'name' => 'Đồ nữ',
            // ],
            // [
            //     'name' => 'Unisex'
            // ],
            // [
            //     'name' => 'Đồ nam'
            // ],
            // [
            //     'name' => 'Đồ nữ',
            // ],
            // [
            //     'name' => 'Unisex'
            // ],
            // [
            //     'name' => 'Đồ nam'
            // ],
            // [
            //     'name' => 'Đồ nữ',
            // ],
            // [
            //     'name' => 'Unisex'
            // ],
            // [
            //     'name' => 'Đồ nam'
            // ],
            // [
            //     'name' => 'Đồ nữ',
            // ],
            // [
            //     'name' => 'Unisex'
            // ],
            // [
            //     'name' => 'Đồ nam'
            // ],
            // [
            //     'name' => 'Đồ nữ',
            // ],
            // [
            //     'name' => 'Unisex'
            // ],
            // [
            //     'name' => 'Đồ nam'
            // ],
            // [
            //     'name' => 'Đồ nữ',
            // ],
            // [
            //     'name' => 'Unisex'
            // ],
            // [
            //     'name' => 'Đồ nam'
            // ],
            // [
            //     'name' => 'Đồ nữ',
            // ],
            // [
            //     'name' => 'Unisex'
            // ],
            // [
            //     'name' => 'Đồ nam'
            // ],
            // [
            //     'name' => 'Đồ nữ',
            // ],
            // [
            //     'name' => 'Unisex'
            // ],
            // [
            //     'name' => 'Đồ nam'
            // ],
            // [
            //     'name' => 'Đồ nữ',
            // ],
            // [
            //     'name' => 'Unisex'
            // ],
        ];
        DB::table('categories')->insert($data);
    }
}
