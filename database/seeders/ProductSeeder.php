<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Fruit Cake',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/53_c2a32321b1c4417d89a727f048d06659_large.png',
                'active' => 1,
                'category_id' => 1,
            ],
            [
                'name' => 'Green Cake 3',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/1__1__72ac901740aa4ae79581213a5dd3a8f9_large.png',
                'active' => 1,
                'category_id' => 1,
            ],
            [
                'name' => 'Coconut Cake',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/7_491649042b62455294abb5468b891337_large.png',
                'active' => 1,
                'category_id' => 1,
            ],
            [
                'name' => 'Tiramisu vuông',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/product_website_19_e9c104479fa343f7829e7ddb39417921_large.png',
                'active' => 1,
                'category_id' => 1,
            ],
            [
                'name' => 'Capuccino',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/5_13bcdbfc09304024ba0e14acf5db18e1_large.png',
                'active' => 1,
                'category_id' => 1,
            ],
            [
                'name' => 'Red velvet vuông',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/49_aafe4555a0da481a9692682c006d3de1_large.png',
                'active' => 1,
                'category_id' => 1,
            ],
            [
                'name' => 'Fresh fruit cake',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/product_website_30_805c4673c8eb44e7a93d6bc1abf0bb67_large.png',
                'active' => 1,
                'category_id' => 1,
            ],
            [
                'name' => 'Tỉamisu',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/22_2106d23eac324a0f8223f62090918d18_large.png',
                'active' => 1,
                'category_id' => 1,
            ],
            [
                'name' => 'Dark chocolate Cake',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/57_7dc32283823c4330970efd5457d7552a_large.png',
                'active' => 1,
                'category_id' => 2,
            ],
            [
                'name' => 'Dark chocolate Cake S',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/9_f95516f6a2ea477998b54a2e7a8a0310_large.png',
                'active' => 1,
                'category_id' => 2,
            ],
            [
                'name' => 'Dark chocolate Cake MTP',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/56_f0c12125b57c4fd3a12bd1ed2cc0cf0c_large.png',
                'active' => 1,
                'category_id' => 2,
            ],
            [
                'name' => 'Moka Cake',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/28_e6a69b75e9af42d48d0fe4056db63778_large.png',
                'active' => 1,
                'category_id' => 2,
            ],
            [
                'name' => 'Opera vuông',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/51_f790b74ed1ca49d89588fdaeea55f830_large.png',
                'active' => 1,
                'category_id' => 2,
            ],
            [
                'name' => 'Praline 2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/57379420_203786440601400_2098575064399085568_o_203786427268068_3c38f26febc149568b7b3901b99316b8_large.jpg',
                'active' => 1,
                'category_id' => 2,
            ],
            [
                'name' => 'White chocolate cake',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/10_d219861491854ffeac55e40786467a8d_large.png',
                'active' => 1,
                'category_id' => 2,
            ],
            [
                'name' => 'White chocolate and flower cake',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/54_a99487dd93674376a9034f34d40194f5_large.png',
                'active' => 1,
                'category_id' => 2,
            ],

            [
                'name' => 'Blue berry mousse',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 360000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/product_website_10_67915c7ecf8446bbb47d4e5b82be4b14_large.png',
                'active' => 1,
                'category_id' => 3,
            ],
            [
                'name' => 'Caramel chocolate cake',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 360000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/product_website_31_8fcd777ce35d42388d34552141bb9ba5_large.png',
                'active' => 1,
                'category_id' => 3,
            ],
            [
                'name' => 'Cherry cheese mousse',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 360000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/product_website_11_56c6557f87d34cfaa4bc25344c37bc3b_large.png',
                'active' => 1,
                'category_id' => 3,
            ],
            [
                'name' => 'Hawai mousse',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/product_website_34_ccbbd0917c8b4ffe9cd51cb50eee41ec_large.png',
                'active' => 1,
                'category_id' => 3,
            ],
            [
                'name' => 'Passion mousse chanh',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/product_website_33_11ce6dbfa30a40d19a99cb2970e0451b_large.png',
                'active' => 1,
                'category_id' => 3,
            ],
            [
                'name' => 'Raspbery cream cheese',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam facilisis justo, dapibus pulvinar leo posuere vel. Phasellus ac ultrices est. Aliquam enim leo, ultricies sit amet finibus in, aliquam eu quam. Sed sit amet tortor consectetur, cursus lectus bibendum, malesuada felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultricies interdum mauris, eu bibendum nibh commodo vitae. Maecenas egestas efficitur libero nec facilisis.',
                'price_base' => 275000,
                'price_sale' => NULL,
                'images' => 'https://product.hstatic.net/1000313040/product/product_website_32_328d3c21b6c04c12badfcc732b8a1f59_large.png',
                'active' => 1,
                'category_id' => 3,
            ],
        ]);
    }
}
