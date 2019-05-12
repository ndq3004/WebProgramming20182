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
        // $table->increments('user_id');
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->string('password'); 
        //     $table->string('phone', 13);
        //     $table->text('address');
        //     $table->string('user_point')->default('0');
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>('admin@admin'),
            'password'=>bcrypt('admin'),

        ]);
        for($i = 0; $i < 20; $i++){
            DB::table('users')->insert([[
                'name'=>'Bùi Thị Mến'.' '.$i,
                'email'=>('men'.$i.'@gmail.com'),
                'password'=>bcrypt('12345678'),
                'phone'=>'01625822299',
                'address'=>'Hòa Bình'
            ],
            [
                'name'=>'Nguyễn Đình Quân'.' '.$i,
                'email'=>'quan'.$i.'@gmail.com',
                'password'=>bcrypt('12345678'),
                'phone'=>'01625822299',
                'address'=>'Hà Nội'
            ],
            [
                'name'=>'Hòa Thị Hường'.' '.$i,
                'email'=>'huong'.$i.'@gmail.com',
                'password'=>bcrypt('12345678'),
                'phone'=>'01625822299',
                'address'=>'Hà Nội'
            ],
            [
                'name'=>'Hoàng Phương Loan'.' '.$i,
                'email'=>'loan'.$i.'@gmail.com',
                'password'=>bcrypt('12345678'),
                'phone'=>'0162287334',
                'address'=>'Hà Nội'
            ]
        ]);
        }
        
    }
}
