<?php

use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [[
            'name' => 'Xanh',
            'color_code' => '#0000ff',
        ],
        [
            'name' => 'Đỏ',
            'color_code' => '#ff0000',
        ],
        [
            'name' => 'Đen',
            'color_code' => '#000000',
        ],
        [
            'name' => 'Trắng',
            'color_code' => '#ffffff',
        ]];
        DB::table('colors')->insert($data);
    }
}
