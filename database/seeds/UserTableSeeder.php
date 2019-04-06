<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
        	'name'=>'Bùi Thị Mến',
        	'email'=>'men@gmail.com',
        	'password'=>Hash::make('123456')
        ],
        [
        	'name'=>'Nguyễn Đình Quân',
        	'email'=>'quan@gmail.com',
        	'password'=>Hash::make('123456')
        ],
        [
        	'name'=>'Hòa Thị Hường',
        	'email'=>'huong@gmail.com',
        	'password'=>Hash::make('123456')
        ],
        [
        	'name'=>'Hoàng Phương Loan',
        	'email'=>'loan@gmail.com',
        	'password'=>Hash::make('123456')
        ]
    ]);
    }
}
