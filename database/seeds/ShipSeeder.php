<?php

use Illuminate\Database\Seeder;

class ShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = [
            [
                'city_id' => 1,
                'fee' => 30000
            ],
            [
                'city_id' => 2,
                'fee' =>20000,
            ],
            [
                'city_id' => 4,
                'fee' =>20000,
            ],
            [
                'city_id' => 6,
                'fee' =>20000,
            ],
            [
                'city_id' => 8,
                'fee' =>20000,
            ],
            [
                'city_id' => 10,
                'fee' =>20000,
            ],

            [
                'city_id' => 11,
                'fee' => 40000
            ],
            [
                'city_id' => 12,
                'fee' =>50000,
            ],
            [
                'city_id' => 14,
                'fee' =>50000,
            ],
            [
                'city_id' => 15,
                'fee' => 40000
            ],
            [
                'city_id' => 17,
                'fee' => 40000
            ],
            [
                'city_id' => 19,
                'fee' => 40000
            ],
            [
                'city_id' => 20,
                'fee' =>50000,
            ],
            [
                'city_id' => 22,
                'fee' =>70000,
            ],
            [
                'city_id' => 24,
                'fee' =>70000,
            ],
            [
                'city_id' => 25,
                'fee' => 60000
            ],
            [
                'city_id' => 26,
                'fee' =>70000,
            ],
            [
                'city_id' => 27,
                'fee' => 60000
            ],
            [
                'city_id' => 30,
                'fee' =>70000,
            ],
            [
                'city_id' => 31,
                'fee' => 55000
            ],
            [
                'city_id' => 33,
                'fee' => 55000
            ],
            [
                'city_id' => 34,
                'fee' => 65000,
            ],
            [
                'city_id' => 35,
                'fee' => 55000
            ],
            [
                'city_id' => 36,
                'fee' => 65000,
            ],
            [
                'city_id' => 37,
                'fee' => 55000
            ],
            [
                'city_id' => 38,
                'fee' => 65000,
            ],
            [
                'city_id' => 40,
                'fee' => 65000,
            ],
        ];
        DB::table('ships')->insert($data);
    }
}
