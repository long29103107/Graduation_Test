<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DiscountSeeder extends Seeder
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
            'user_id' => 1,
            'discount_code' => Str::upper(Str::random(20)),
            'apply'=>json_encode(["1","2"]),
            'type' =>'product',
            'sale_percent' => 50,
            
            'active' => 0,
            'user_apply'=>1,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::tomorrow(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => 1,
            'discount_code' => Str::upper(Str::random(20)),
            'apply'=>json_encode(["2","3"]),
            'type' =>'product',
            'sale_percent' => 50,
            
            'active' => 0,
            'user_apply'=>1,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::tomorrow(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => 1,
            'discount_code' => Str::upper(Str::random(20)),
            'apply'=>json_encode(["2","1"]),
            'type' =>'category',
            'sale_percent' => 10,
            'active' => 0,
            'user_apply'=> 1,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::tomorrow(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => 1,
            'discount_code' => Str::upper(Str::random(20)),
            'apply'=>json_encode(["1"]),
            'type' =>'category',
            'sale_percent' => 20,
            
            'user_apply'=>1,
            'active' => 0,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::tomorrow(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => 1,
            'discount_code' => Str::upper(Str::random(20)),
            'apply'=>json_encode(["3"]),
            'type' =>'product',
            'sale_percent' => 60,
            
            'active' => 0,
            'user_apply'=>1,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::tomorrow(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]];
        DB::table('discounts')->insert($data);
    }
}
