<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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
                'name'=>'Samsung Mobile',
                'price'=>'10000',
                'category'=>'Mobile',
                'gallery'=>'https://images.app.goo.gl/FU2LPbXjqSZXinHP9',
                'description'=>"4 GB ram and 64 internal Stroge"
            ],
            [
                'name'=>'Hp laptop',
                'price'=>'30000',
                'category'=>'laptop',
                'gallery'=>'https://images.app.goo.gl/yd5zkZvNuHi2Tcer7',
                'description'=>"4 GB ram and 512 internal Stroge"
            ],
            [
                'name'=>'TV',
                'price'=>'22000',
                'category'=>'Tv',
                'gallery'=>'https://images.app.goo.gl/wjG3b1xZDLn9WzMZ9',
                'description'=>"Full HD display and Super almond color"
            ],
            [
                'name'=>'Watch',
                'price'=>'2200',
                'category'=>'watch',
                'gallery'=>'https://images.app.goo.gl/HRbWD2KkzRnnAwnh8',
                'description'=>"Smart watch 12mb storage"
            ]
        ]);

    }
}
