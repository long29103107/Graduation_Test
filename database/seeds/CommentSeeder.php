<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentSeeder extends Seeder
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
            'product_id'=> 1,
            'parent_id'=>null,
            'comment_text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => 1,
            'product_id'=> 2,
            'parent_id'=>null,
            'comment_text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => 1,
            'product_id'=> 3,
            'parent_id'=>null,
            'comment_text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()        
        ],
        [
            'user_id' => 1,
            'product_id'=> 1,
            'parent_id'=>1,
            'comment_text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()  
        ],
        [
            'user_id' => 1,
            'product_id'=> 1,
            'parent_id'=>null,
            'comment_text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => 1,
            'product_id'=> 2,
            'parent_id'=>null,
            'comment_text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => 1,
            'product_id'=> 3,
            'parent_id'=>null,
            'comment_text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()        
        ]];
        DB::table('comments')->insert($data);
    }
}
