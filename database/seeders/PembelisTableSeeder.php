<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = 
        [
            ['nama'=>'Ujang', 'jns_kelamin'=>'Laki-Laki', 'alamat'=>'Bandung', 'kode_pos'=>'21231', 'kota'=>'Bandung', 'tgl_lahir'=>'21-04-1979'],
            ['nama'=>'Udin', 'jns_kelamin'=>'Laki-Laki', 'alamat'=>'Bandung', 'kode_pos'=>'32821', 'kota'=>'Jakarta', 'tgl_lahir'=>'12-09-1985'],
            ['nama'=>'Andi', 'jns_kelamin'=>'Laki-Laki', 'alamat'=>'Bandung', 'kode_pos'=>'83728', 'kota'=>'Depok', 'tgl_lahir'=>'17-02-1992'],
            ['nama'=>'Jajang', 'jns_kelamin'=>'Laki-Laki', 'alamat'=>'Bandung', 'kode_pos'=>'32732', 'kota'=>'Bogor', 'tgl_lahir'=>'31-10-1998'],
            ['nama'=>'Edo', 'jns_kelamin'=>'Laki-Laki', 'alamat'=>'Bandung', 'kode_pos'=>'82363', 'kota'=>'Tanggerang', 'tgl_lahir'=>'07-04-1999']
        ];
        DB::table('pembelis')->insert($pembeli);
    }
}
