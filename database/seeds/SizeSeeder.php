<?php

use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
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
            'name' => 'XL'
        ],
        [
            'name' => 'L'
        ],
        [
            'name' => 'M',
        ],
        [
            'name' => 'S'
        ]];
        DB::table('sizes')->insert($data);
    }
}
