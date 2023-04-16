<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [ 
                'name' => 'Gateaux kem tươi',
                'description' => 'Morbi eu libero dictum turpis scelerisque tempus. Praesent lobortis, arcu ut sagittis lobortis, tellus elit vulputate ex, vehicula finibus neque massa sed orci. Etiam bibendum in turpis non sagittis. Integer tempus urna sed arcu porttitor, non semper nulla venenatis. Nulla facilisi. Curabitur consectetur massa dui, id faucibus tellus ullamcorper eget.',
            ],
            [ 
                'name' => 'Gateaux kem bơ',
                'description' => 'Morbi eu libero dictum turpis scelerisque tempus. Praesent lobortis, arcu ut sagittis lobortis, tellus elit vulputate ex, vehicula finibus neque massa sed orci. Etiam bibendum in turpis non sagittis. Integer tempus urna sed arcu porttitor, non semper nulla venenatis. Nulla facilisi. Curabitur consectetur massa dui, id faucibus tellus ullamcorper eget.',
            ],
            [ 
                'name' => 'Bánh mousse',
                'description' => 'Morbi eu libero dictum turpis scelerisque tempus. Praesent lobortis, arcu ut sagittis lobortis, tellus elit vulputate ex, vehicula finibus neque massa sed orci. Etiam bibendum in turpis non sagittis. Integer tempus urna sed arcu porttitor, non semper nulla venenatis. Nulla facilisi. Curabitur consectetur massa dui, id faucibus tellus ullamcorper eget.',                
            ],
            [ 
                'name' => 'Gateaux mousse',
                'description' => 'Morbi eu libero dictum turpis scelerisque tempus. Praesent lobortis, arcu ut sagittis lobortis, tellus elit vulputate ex, vehicula finibus neque massa sed orci. Etiam bibendum in turpis non sagittis. Integer tempus urna sed arcu porttitor, non semper nulla venenatis. Nulla facilisi. Curabitur consectetur massa dui, id faucibus tellus ullamcorper eget.',                
            ],
            [ 
                'name' => 'Bánh valentine - trái tim',
                'description' => 'Morbi eu libero dictum turpis scelerisque tempus. Praesent lobortis, arcu ut sagittis lobortis, tellus elit vulputate ex, vehicula finibus neque massa sed orci. Etiam bibendum in turpis non sagittis. Integer tempus urna sed arcu porttitor, non semper nulla venenatis. Nulla facilisi. Curabitur consectetur massa dui, id faucibus tellus ullamcorper eget.',        
            ],
            [ 
                'name' => 'Bánh sinh nhật bé trai',
                'description' => 'Morbi eu libero dictum turpis scelerisque tempus. Praesent lobortis, arcu ut sagittis lobortis, tellus elit vulputate ex, vehicula finibus neque massa sed orci. Etiam bibendum in turpis non sagittis. Integer tempus urna sed arcu porttitor, non semper nulla venenatis. Nulla facilisi. Curabitur consectetur massa dui, id faucibus tellus ullamcorper eget.',              
            ],
            [ 
                'name' => 'Bánh sinh nhật bé gái',
                'description' => 'Morbi eu libero dictum turpis scelerisque tempus. Praesent lobortis, arcu ut sagittis lobortis, tellus elit vulputate ex, vehicula finibus neque massa sed orci. Etiam bibendum in turpis non sagittis. Integer tempus urna sed arcu porttitor, non semper nulla venenatis. Nulla facilisi. Curabitur consectetur massa dui, id faucibus tellus ullamcorper eget.',               
            ],
            [ 
                'name' => 'Bánh in ảnh',
                'description' => 'Morbi eu libero dictum turpis scelerisque tempus. Praesent lobortis, arcu ut sagittis lobortis, tellus elit vulputate ex, vehicula finibus neque massa sed orci. Etiam bibendum in turpis non sagittis. Integer tempus urna sed arcu porttitor, non semper nulla venenatis. Nulla facilisi. Curabitur consectetur massa dui, id faucibus tellus ullamcorper eget.',               
            ],
            [ 
                'name' => 'Bánh sự kiện theo yêu cầu',
                'description' => 'Morbi eu libero dictum turpis scelerisque tempus. Praesent lobortis, arcu ut sagittis lobortis, tellus elit vulputate ex, vehicula finibus neque massa sed orci. Etiam bibendum in turpis non sagittis. Integer tempus urna sed arcu porttitor, non semper nulla venenatis. Nulla facilisi. Curabitur consectetur massa dui, id faucibus tellus ullamcorper eget.',               
            ]
        ]);
    }
}
