<?php

use Illuminate\Database\Seeder;

class WishlistSeeder extends Seeder
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
            'user_id' => '1',
            'product_id' => '1'
        ],
        [
            'user_id' => '1',
            'product_id' => '2'
        ],
        [
            'user_id' => '1',
            'product_id' => '3'
        ],
        [
            'user_id' => '1',
            'product_id' => '4'
        ],
        [
            'user_id' => '2',
            'product_id' => '1'
        ],
        [
            'user_id' => '2',
            'product_id' => '2'
        ],
        [
            'user_id' => '2',
            'product_id' => '3'
        ],
        [
            'user_id' => '2',
            'product_id' => '4'
        ]];
         DB::table('wishlists')->insert($data);
    }
}
