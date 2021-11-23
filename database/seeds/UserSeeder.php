<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
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
            
            'username' => 'Nguyễn Hoàng Long',
            'email' => 'long@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '1122334455',
            'active' => Carbon::now(),
        ],
        [
            'username' => 'Sang',
            'email' => 'sang@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '1122334455',
            'active' => Carbon::now(),
        ],
        [
            'username' => 'Huy',
            'email' => 'huy@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '1122334455',
            'active' =>  Carbon::now(),
        ],
        [
            'username' => 'Khoa',
            'email' => 'khoa@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '1122334455',
            'active' =>  Carbon::now(),
        ],
        [
            'username' => 'Son',
            'email' => 'son@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '1122334455',
            'active' =>  Carbon::now(),
        ],
        [
            'username' => 'Bao',
            'email' => 'bao@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '1122334455',
            'active' =>  Carbon::now(),
        ],
        [
            'username' => 'Duong',
            'email' => 'duong@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '1122334455',
            'active' =>  Carbon::now(),
        ],
        [
            'username' => 'Lin',
            'email' => 'lin@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '1122334455',
            'active' =>  Carbon::now(),
        ],
        [
            'username' => 'Mai',
            'email' => 'mai@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '1122334455',
            'active' =>  Carbon::now(),
        ],
        [
            'username' => 'Phuong',
            'email' => 'phuong@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '1122334455',
            'active' =>  Carbon::now(),
        ],
        [
            'username' => 'Hoa',
            'email' => 'hoa@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '1122334455',
            'active' =>  Carbon::now(),
        ],
        [
            'username' => 'Lan',
            'email' => 'lan@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '1122334455',
            'active' =>  Carbon::now(),
        ],
    ];
        DB::table('users')->insert($data);
        $user = \App\User::where('email','long@gmail.com')->first();
        $user->assignRole('administrator');
        $user = \App\User::where('email','sang@gmail.com')->first();
        $user->assignRole('administrator');
        $user = \App\User::where('email','huy@gmail.com')->first();
        $user->assignRole('customer');
        $user = \App\User::where('email','khoa@gmail.com')->first();
        $user->assignRole('customer');
        $user = \App\User::where('email','duong@gmail.com')->first();
        $user->assignRole('customer');
        $user = \App\User::where('email','lin@gmail.com')->first();
        $user->assignRole('customer');
        $user = \App\User::where('email','son@gmail.com')->first();
        $user->assignRole('customer');
        $user = \App\User::where('email','bao@gmail.com')->first();
        $user->assignRole('customer');
        $user = \App\User::where('email','mai@gmail.com')->first();
        $user->assignRole('customer');
        $user = \App\User::where('email','phuong@gmail.com')->first();
        $user->assignRole('customer');
        $user = \App\User::where('email','hoa@gmail.com')->first();
        $user->assignRole('customer');
        $user = \App\User::where('email','lan@gmail.com')->first();
        $user->assignRole('customer');
    }
}
