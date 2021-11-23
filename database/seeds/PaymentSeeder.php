<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
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
                ,"method" => "delivery"
                ,"status" => 1
                ,"ship_id" => 1
                ,"amount" => 220000.0
            ],
            [
                "order_id" => 2
                ,"method" => "delivery"
                ,"status" => 1
               ,"ship_id" => 1
                ,"amount" => 555000.0
            ],
            [
                "order_id" => 3
                ,"method" => "delivery"
                ,"status" => 1
                ,"ship_id" => 1
                ,"amount" => 180000.0
            ],
            [
                "order_id" => 4
                ,"method" => "delivery"
                ,"status" => 1
               ,"ship_id" => 1
                ,"amount" => 840000.0
            ],
            [
                "order_id" => 5
                ,"method" => "delivery"
                ,"status" => 1
                ,"ship_id" => 1
                ,"amount" => 430000.0
            ],
            [
                "order_id" => 6
                ,"method" => "delivery"
                ,"status" => 1
                ,"ship_id" => 1
                ,"amount" => 330000.0
            ],
            [
                "order_id" => 7
                ,"method" => "delivery"
                ,"status" => 1
               ,"ship_id" => 1
                ,"amount" => 670000.0
            ],
            [
                "order_id" => 8
                ,"method" => "delivery"
                ,"status" => 1
               ,"ship_id" => 1
                ,"amount" => 1230000.0
            ],
            [
                "order_id" => 9
                ,"method" => "delivery"
                ,"status" => 1
               ,"ship_id" => 1
                ,"amount" => 920000.0
            ],
            [
                "order_id" => 10
                ,"method" => "delivery"
                ,"status" => 1
               ,"ship_id" => 1
                ,"amount" => 630000.0
            ],
            [
                "order_id" => 11
                ,"method" => "delivery"
                ,"status" => 1
               ,"ship_id" => 1
                ,"amount" => 550000.0
            ],
            [
                "order_id" => 12
                ,"method" => "delivery"
                ,"status" => 0
                ,"ship_id" => 1
                ,"amount" => 180000.0
            ]
        ];
        DB::table('payments')->insert($data);
    }
}
