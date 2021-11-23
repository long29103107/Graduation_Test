<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OpinionSeeder extends Seeder
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
            'name' => 'Long',
            'email'=> 'long@gmail.com',
            'message'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum nisl a tortor ornare, eu auctor tellus scelerisque.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'name' => 'Huy',
            'email'=> 'huy@gmail.com',
            'message'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum nisl a tortor ornare, eu auctor tellus scelerisque.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'name' => 'Hai',
            'email'=> 'hai@gmail.com',
            'message'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum nisl a tortor ornare, eu auctor tellus scelerisque.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'name' => 'Vinh',
            'email'=> 'Vinh@gmail.com',
            'message'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum nisl a tortor ornare, eu auctor tellus scelerisque.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'name' => 'Sang',
            'email'=> 'Sang@gmail.com',
            'message'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum nisl a tortor ornare, eu auctor tellus scelerisque.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'name' => 'Huy',
            'email'=> 'huy@gmail.com',
            'message'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum nisl a tortor ornare, eu auctor tellus scelerisque.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'name' => 'Hai',
            'email'=> 'hai@gmail.com',
            'message'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum nisl a tortor ornare, eu auctor tellus scelerisque.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'name' => 'Vinh',
            'email'=> 'Vinh@gmail.com',
            'message'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum nisl a tortor ornare, eu auctor tellus scelerisque.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'name' => 'Sang',
            'email'=> 'Sang@gmail.com',
            'message'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum nisl a tortor ornare, eu auctor tellus scelerisque.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'name' => 'Nhat',
            'email'=> 'nhat@gmail.com',
            'message'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum nisl a tortor ornare, eu auctor tellus scelerisque.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'name' => 'Chinh',
            'email'=> 'chinh@gmail.com',
            'message'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum nisl a tortor ornare, eu auctor tellus scelerisque.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]];
        DB::table('opinions')->insert($data);
    }
}
