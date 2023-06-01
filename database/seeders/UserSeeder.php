<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') ->insert([
            [
                'email'  =>'admin@gmail.com',
                'name' => 'admin',
                'password' =>  Hash::make('admin'),
                'role' => 0 
            ],
            [
                'email'  =>'hau.nguyebk19@gmail.com',
                'name' => 'Hau bk',
                'password' =>  Hash::make('hau.nguyebk19'),
                'role' => 1 
            ]
        ]);
    }
}
