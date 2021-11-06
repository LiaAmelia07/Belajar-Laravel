<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PembeliansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian =[
            ['nama_barang'=>'Kopi','nama_suplier'=>'Asep','qty'=>'400','tgl_beli'=>'12-09-2008'],
            ['nama_barang'=>'Teh','nama_suplier'=>'Supri','qty'=>'100','tgl_beli'=>'11-10-2008'],
            ['nama_barang'=>'Kue','nama_suplier'=>'Dadang','qty'=>'500','tgl_beli'=>'12-10-2008'],
            ['nama_barang'=>'Roti','nama_suplier'=>'Oman','qty'=>'300','tgl_beli'=>'19-09-2008'],
            ['nama_barang'=>'Permen','nama_suplier'=>'Galih','qty'=>'200','tgl_beli'=>'22-09-2008']
        ];
        DB::table('pembelians')->insert($pembelian);
    }
}
