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
        //
        DB::table('products')->insert([
        [
            'name'=>'oppo mobile',
            'price'=>'200$',
            'description'=>'A Smartphone with 8gb ram and much more',
            'category'=>'mobile',
            'gallery'=>'https://th.bing.com/th?id=OIP.kmO5WStrWn7JIw7oyRH2ZQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2',
      
        ],

        [
            'name'=>'Parasonic Tv',
            'price'=>'400$',
            'description'=>'A SmartTV with much more',
            'category'=>'tv',
            'gallery'=>'https://th.bing.com/th?id=OIP.c41oURuONapufZfM7ep23AHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2',
      
        ],

        [
            'name'=>'Soni Tv',
            'price'=>'500$',
            'description'=>'A SmartTv with much more features',
            'category'=>'tv',
            'gallery'=>'https://th.bing.com/th?id=OIP.epUu2H7AYKKR6mNcfbzvfAHaIj&w=232&h=268&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2',
      
        ],

        [
            'name'=>'LG Refrigrator',
            'price'=>'350$',
            'description'=>'A Smart-Refrigrator with much more',
            'category'=>'fridge',
            'gallery'=>'https://th.bing.com/th?id=OIP.USJAcunoKQA5ZHbhSlcoJQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2',
      
        ],

        [
            'name'=>'Samsung mobile',
            'price'=>'750$',
            'description'=>'A Smart-mobile with much more',
            'category'=>'mobile',
            'gallery'=>'http://ts2.mm.bing.net/th?id=OIP.aqz8rs_OMuYSAD6caMTjyAHaEo&pid=15.1',
      
        ],
            
        ]);

    }
}
