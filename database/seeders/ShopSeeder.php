<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'name' => 'Le Castella',
                'opening_time' => '7h30 - 22h from Monday to Sunday (including holidays).',
                'address' => 'Tòa BA1, Kí túc xá khu B, Đông hòa, Dĩ An, Bình Dương'
            ],
            [
                'name' => 'Pacey Cupcakes',
                'opening_time' => '8h30 - 20h from Monday to Sunday (including holidays).',
                'address' => 'Kí túc xá khu A, Linh Trung, Thủ Đức, Hồ Chí Minh'
            ],
            [
                'name' => 'The 1985',
                'opening_time' => '8h30 - 20h from Monday to Sunday (including holidays).',
                'address' => 'Tòa F01, Kí túc xá khu B, Đông hòa, Dĩ An, Bình Dương'
            ],
            [
                'name' => 'La Bonita',
                'opening_time' => '8h30 - 22h from Monday to Sunday (including holidays).',
                'address' => 'Kí túc xá khu B, Đông hòa, Dĩ An, Bình Dương'
            ],
            [
                'name' => 'Tiệm Bánh Bia Bơ',
                'opening_time' => '8h00 - 22h from Monday to Sunday (including holidays).',
                'address' => 'Tòa E, Kí túc xá khu B, Đông hòa, Dĩ An, Bình Dương'
            ],
            [
                'name' => 'Dallas Cakes',
                'opening_time' => '7h30 - 22h from Monday to Sunday (including holidays).',
                'address' => 'Tòa D5, Kí túc xá khu B, Đông hòa, Dĩ An, Bình Dương'
            ]
        ]);

        DB::table('users')->insert([
            [   
                'name' => 'Le Castella',
                'email' => 'Le_Castella@gmail.com',
                'password' =>  Hash::make('hau.nguyenbk19'),
                'role' => 1,
                'shop_id' => 1 
            ],
            [   
                'name' => 'Pacey Cupcakes',
                'email' => 'Pacey_Cupcakes@gmail.com',
                'password' =>  Hash::make('hau.nguyenbk19'),
                'role' => 1,
                'shop_id' => 2
            ],
            [   
                'name' => 'The 1985',
                'email' => 'The_1985@gmail.com',
                'password' =>  Hash::make('hau.nguyenbk19'),
                'role' => 1,
                'shop_id' => 3 
            ],
            [   
                'name' => 'La Bonita',
                'email' => 'La_Bonita@gmail.com',
                'password' =>  Hash::make('hau.nguyenbk19'),
                'role' => 1,
                'shop_id' => 4 
            ],

            [   
                'name' => 'Tiệm Bánh Bia Bơ',
                'email' => 'BiaBo@gmail.com',
                'password' =>  Hash::make('hau.nguyenbk19'),
                'role' => 1,
                'shop_id' => 5
            ],

            [   
                'name' => 'Dallas Cakes',
                'email' => 'Dallas_Cakes@gmail.com',
                'password' =>  Hash::make('hau.nguyenbk19'),
                'role' => 1,
                'shop_id' => 6
            ]
        ]);
    }
}
