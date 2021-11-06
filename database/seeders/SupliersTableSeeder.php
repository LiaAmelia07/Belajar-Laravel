<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class SupliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier =[
            ['nama'=>'Asep', 'alamat'=>'Bandung', 'kode_pos'=>'21231', 'kota'=>'Bandung'],
            ['nama'=>'Supri', 'alamat'=>'Bandung', 'kode_pos'=>'32821', 'kota'=>'Jakarta'],
            ['nama'=>'Dadang', 'alamat'=>'Bandung', 'kode_pos'=>'83728', 'kota'=>'Depok'],
            ['nama'=>'Oman', 'alamat'=>'Bandung', 'kode_pos'=>'32732', 'kota'=>'Bogor'],
            ['nama'=>'Galih', 'alamat'=>'Bandung', 'kode_pos'=>'82363', 'kota'=>'Tanggerang']
        ];
        DB::table('supliers')->insert($suplier);
    }
}
