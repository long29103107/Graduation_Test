<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrderDetailSeeder extends Seeder
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
                "order_id" => 1
                ,"product_detail_id" => 1
                ,"discount_id" => null
                ,"quantity" => 1
                ,"price" => 190000.0
                ],
                [
                "order_id" => 2
                ,"product_detail_id" => 17
                ,"discount_id" => 1
                ,"quantity" => 1
                ,"price" => 125000.0
            ],
            [
                "order_id" => 2
                ,"product_detail_id" => 42
                ,"discount_id" => null
                ,"quantity" => 2
                ,"price" => 400000.0
            ],
            [
                "order_id" => 3
                ,"product_detail_id" => 106
                ,"discount_id" => null
                ,"quantity" => 1
                ,"price" => 150000.0
            ],
            [
                "order_id" => 4
                ,"product_detail_id" => 98
                ,"discount_id" => null
                ,"quantity" => 1
                ,"price" => 250000.0
            ],
            [
                "order_id" => 4
                ,"product_detail_id" => 58
                ,"discount_id" => 4
                ,"quantity" => 1
                ,"price" => 320000.0
            ],
            [
                "order_id" => 4
                ,"product_detail_id" => 50
                ,"discount_id" => 4
                ,"quantity" => 1
                ,"price" => 240000.0
            ],
            [
                "order_id" => 5
                ,"product_detail_id" => 46
                ,"discount_id" => null
                ,"quantity" => 2
                ,"price" => 400000.0
            ],
            [
                "order_id" => 6
                ,"product_detail_id" => 25
                ,"discount_id" => null
                ,"quantity" => 2
                ,"price" => 300000.0
            ],
            [
                "order_id" => 7
                ,"product_detail_id" => 157
                ,"discount_id" => null
                ,"quantity" => 2
                ,"price" => 640000.0
            ],
            [
                "order_id" => 8
                ,"product_detail_id" => 150
                ,"discount_id" => null
                ,"quantity" => 2
                ,"price" => 500000.0
            ],
            [
                "order_id" => 8
                ,"product_detail_id" => 142
                ,"discount_id" => null
                ,"quantity" => 2
                ,"price" => 700000.0
            ],
            [
                "order_id" => 9
                ,"product_detail_id" => 114
                ,"discount_id" => null
                ,"quantity" => 1
                ,"price" => 180000.0
            ],
            [
                "order_id" => 9
                ,"product_detail_id" => 115
                ,"discount_id" => null
                ,"quantity" => 2
                ,"price" => 360000.0
            ],
            [
                "order_id" => 9
                ,"product_detail_id" => 142
                ,"discount_id" => null
                ,"quantity" => 1
                ,"price" => 350000.0
            ],
            [
                "order_id" => 10
                ,"product_detail_id" => 130
                ,"discount_id" => null
                ,"quantity" => 2
                ,"price" => 600000.0
            ],
            [
                "order_id" => 11
                ,"product_detail_id" => 82
                ,"discount_id" => null
                ,"quantity" => 1
                ,"price" => 320000.0
            ],
            [
                "order_id" => 11
                ,"product_detail_id" => 42
                ,"discount_id" => null
                ,"quantity" => 1
                ,"price" => 200000.0
            ],
            [
                "order_id" => 12
                ,"product_detail_id" => 31
                ,"discount_id" => null
                ,"quantity" => 1
                ,"price" => 150000.0
            ]
        ];
        DB::table('order_details')->insert($data);
    }
}
