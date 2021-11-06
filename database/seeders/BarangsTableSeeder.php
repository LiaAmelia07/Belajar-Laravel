<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = 
        [
            ['nama'=>'Kopi', 'varian'=>'Minuman', 'harga_beli'=>'2500', 'harga_jual'=>'3000'],
            ['nama'=>'Teh', 'varian'=>'Minuman', 'harga_beli'=>'1500', 'harga_jual'=>'2000'],
            ['nama'=>'Roti', 'varian'=>'Makanan', 'harga_beli'=>'3500', 'harga_jual'=>'5000'],
            ['nama'=>'Kue', 'varian'=>'Makanan', 'harga_beli'=>'3500', 'harga_jual'=>'4000'],
            ['nama'=>'Permen', 'varian'=>'Makanan', 'harga_beli'=>'500', 'harga_jual'=>'1000']
        ];
        DB::table('barangs')->insert($barang);
    }
}
