<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
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
            'name' => 'Đồ nam',
            'slug' => 'do-nam'
        ],
        [
            'name' => 'Sơ mi',
            'slug' => 'so-mi'
        ],
        [
            'name' => 'Áo thun',
            'slug' => 'ao-thun'
        ],
        [
            'name' => 'Đồ nữ',
            'slug' => 'do-nu'
        ]];
        DB::table('tags')->insert($data);
    }
}