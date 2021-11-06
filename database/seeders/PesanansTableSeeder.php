<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PesanansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $pesanan =
        [
            ['nama_pelanggan'=>'Budi', 'nama_barang'=>'Sendal', 'qty'=>'500', 'tgl_Pesan'=>'13-04-2006'],
            ['nama_pelanggan'=>'Tomi', 'nama_barang'=>'Gamis', 'qty'=>'100', 'tgl_Pesan'=>'16-04-2007'],
            ['nama_pelanggan'=>'Rudi', 'nama_barang'=>'Sepatu', 'qty'=>'300', 'tgl_Pesan'=>'27-07-2008'],
            ['nama_pelanggan'=>'Toro', 'nama_barang'=>'Laptop', 'qty'=>'500', 'tgl_Pesan'=>'21-02-2009'],
            ['nama_pelanggan'=>'Tedi', 'nama_barang'=>'Boneka', 'qty'=>'200', 'tgl_Pesan'=>'11-04-2010']
        ];
        DB::table('pesanans')->insert($pesanan);
    }
}
