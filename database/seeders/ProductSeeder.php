<?php

namespace Database\Seeders;

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
           [ 'name' => 'oppo mobile',
            'price' => '300',
            'category' => 'mobile',
            'description' => 'A smartphone with 8gb ram and much more features ',
            'gallery' => 'https://www.oppo.com/images/mobiles-phone/gallery/MOPPO_4000.jpg'
           ],
           [ 'name' => 'Panasonic',
            'price' => '400',
            'category' => 'tv',
            'description' => 'A smart tv with much more features ',
            'gallery' => 'https://li.gadgets360cdn.com/products/television/large/Panasonic.jpg'
           ],
           [ 'name' => 'Sony tv',
            'price' => '500',
            'category' => 'tv',
            'description' => 'A tv with much more features ',
            'gallery' => 'https://www.sony.com/data4/PM/KH/lcd-500x500.png'
           ],
           [ 'name' => 'LG fridge',
            'price' => '200',
            'category' => 'fridge',
            'description' => 'A fridge with much more features ',
            'gallery' => 'https://www.lg.com/in/images/fridge/fridge_1200.jpg'
           ]
        ]);
    }
}
