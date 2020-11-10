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
        //
        DB::table('products')->insert([
            [
            'name'=>'Oppo Mobile',
            "price"=>"$100",
            "description"=>"A smart phone with 4gb",
            "category"=>"mobile",
            "gallery"=>"http://localhost/Mobile%20Shoppee/assets/products/13.png"
            ],
            [
                'name'=>'Redmi Mobile',
            "price"=>"$100",
            "description"=>"A smart phone with 4gb",
            "category"=>"mobile",
            "gallery"=>"http://localhost/Mobile%20Shoppee/assets/products/10.png"
            ],
            [
                'name'=>'Apple Mobile',
            "price"=>"$100",
            "description"=>"A smart phone with 4gb",
            "category"=>"mobile",
            "gallery"=>"http://localhost/Mobile%20Shoppee/assets/products/13.png"
            ],
            [
                'name'=>'samsung Mobile',
            "price"=>"$100",
            "description"=>"A smart phone with 4gb",
            "category"=>"mobile",
            "gallery"=>"http://localhost/Mobile%20Shoppee/assets/products/11.png"
            ],
        ]);
    }
}
