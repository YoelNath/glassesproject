<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
            'ProductName' => 'Lotus 552',
            'TotalProduct' => 31,
            'ProductPrice' => '138000',
            'ProductPicture' => 'Lotus_552.png']);

        DB::table('products')->insert([
            'ProductName' => 'Balg eun 8802',
            'TotalProduct' => 1,
            'ProductPrice' => '138000',
            'ProductPicture' => 'Balgeun_8802.png']);

            DB::table('products')->insert([
            'ProductName' => 'Ray Ban 2176',
            'TotalProduct' => 10,
            'ProductPrice' => '1999000',
            'ProductPicture' => 'RayBan_2176.png']);

            DB::table('products')->insert([
            'ProductName' => 'Meister 3104',
            'TotalProduct' => 2,
            'ProductPrice' => '138000',
            'ProductPicture' => 'Meister_3104.png']);

            DB::table('products')->insert([
            'ProductName' => 'Obama 2715',
            'TotalProduct' => 1,
            'ProductPrice' => '138000',
            'ProductPicture' => 'Obama_2715.png']);

            DB::table('products')->insert([
            'ProductName' => 'Balg eun 8805',
            'TotalProduct' => 2,
            'ProductPrice' => '138000',
            'ProductPicture' => 'Balgeun_8805.png']);

            DB::table('products')->insert([
            'ProductName' => 'Meister 3108',
            'TotalProduct' => 2,
            'ProductPrice' => '138000',
            'ProductPicture' => 'Meister_3108.png']);

            
            DB::table('products')->insert([
            'ProductName' => 'Strauss 5527',
            'TotalProduct' => 2,
            'ProductPrice' => '138000',
            'ProductPicture' => 'Strauss_5527.png']);

            DB::table('products')->insert([
            'ProductName' => 'Kacamatalah 6802',
            'TotalProduct' => 2,
            'ProductPrice' => '145000',
            'ProductPicture' => 'Kacamatalah_6802.png']);
    }
}
