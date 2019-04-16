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

        for($i = 0; $i < 100; $i++){
            DB::table('users')->insert([[
                'name'=>'Bùi Thị Mến'.' '.$i,
                'email'=>('men'.$i.'@gmail.com'),
                'password'=>bcrypt('12345678')
            ],
            [
                'name'=>'Nguyễn Đình Quân'.' '.$i,
                'email'=>'quan'.$i.'@gmail.com',
                'password'=>bcrypt('12345678')
            ],
            [
                'name'=>'Hòa Thị Hường'.' '.$i,
                'email'=>'huong'.$i.'@gmail.com',
                'password'=>bcrypt('12345678')
            ],
            [
                'name'=>'Hoàng Phương Loan'.' '.$i,
                'email'=>'loan'.$i.'@gmail.com',
                'password'=>bcrypt('12345678')
            ]
        ]);
        }
        
    }
}
