<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            'name'=>'Meme',
            'price'=>'200$',
            'description'=>'fuck soft',
            'category'=>'small-dick',
            'gallery'=>'file:///C:/Users/hereh/Desktop/download.jpg',
        ]);
    }
}
