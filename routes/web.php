<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\SuplierController;



/*
|--------------------------------------------------------------------------|
| Web Routes                                                               |
|--------------------------------------------------------------------------|
|                                                                          |
| Here is where you can register web routes for your application. These    |
| routes are loaded by the RouteServiceProvider within a group which       |
| contains the "web" middleware group. Now create something great!         |
|--------------------------------------------------------------------------|                                                                         |
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hal2', function () {
    return "<h1>Ini Halaman Dua</h1>";
});

Route::get('biodata', function () {
    $nama = "Lia Amelia";
    $jk = "Perempuan";
    $tmpt = "Bandung";
    $tgl = "07-03-2004";
    $alamat = "Sukamenak";
    $agama = "Islam";
    $hobi = "Ntah";

    return "Nama            : ".$nama ."<br>
            Jenis Kelamin   : " .$jk ."<br>
            Tempat Lahir    : ".$tmpt ."<br>
            Tanggal Lahir   : ".$tgl ."<br>
            Alamat          : ".$alamat ."<br>
            Agama           : ".$agama ."<br>
            Hobi            : " .$hobi ."<br>";
});

Route::get('biodata2', function () {
    $nama = "Lia Amelia";
    $jk = "Perempuan";
    $tmpt = "Bandung";
    $tgl = "07-03-2004";
    $alamat = "Sukamenak";
    $agama = "Islam";
    $hobi = "Ntah";
    return view('biodata', compact('nama','jk','tmpt','tgl','alamat','agama','hobi'));
});
//Parameter Optional
Route::get('/input/{nama?}/{jk?}/{tmpt?}/{tgl?}/{alamat?}/{agama?}/{hobi?}', function ($nama="Lia",$jk="perempuan",$tmpt="Bandung",$tgl="07 Maret 2004",$alamat="Bandung",$agama="Islam",$hobi="Membaca") {
    echo "<p>Nama              : " .$nama ."</p>";
    echo "<p>Jenis Kelamin     : " .$jk ."</p>";
    echo "<p>Tempat Lahir      : " .$tmpt ."</p>";
    echo "<p>Tanggal Lahir     : " .$tgl ."</p>";
    echo "<p>Alamat            : " .$alamat ."</p>";
    echo "<p>Agama             : " .$agama ."</p>";
    echo "<p>Hobi              : " .$hobi;
});

Route ::get('blog',function() {
    $data = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'Content Kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'Content Ketiga']
    ];
    return view('blog', compact('data'));
});

//Array
Route ::get('absen',function() {
    $absen = [
        ['nis' => 1, 'nama' => 'Alya' , 'jk' => 'perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 2, 'nama' => 'Anggi', 'jk' => 'perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 3, 'nama' => 'Anisa', 'jk' => 'perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 4, 'nama' => 'Arif' , 'jk' => 'laki-laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 5, 'nama' => 'Astri', 'jk' => 'perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 6, 'nama' => 'Azhar', 'jk' => 'laki-laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 7, 'nama' => 'Aziz' , 'jk' => 'laki-laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 8, 'nama' => 'Bima' , 'jk' => 'laki-laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 9, 'nama' => 'Cindy', 'jk' => 'perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 10, 'nama' => 'Dinda', 'jk' => 'perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
    ];
    return view('absen', compact('absen'));
});

Route::get('siswa', function(){
    $siswas= [
        ['id' => 1,
            'nama' => 'Lia Amelia',
            'username' => 'itsmeliaam',
            'email' => 'liaamelia1630@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                ['mapel' => 'Bahasa Indonesia'],
                ['mapel' => 'Bahasa Inggris'],
                ['mapel' => 'Bahasa Jepang'],
                ['mapel' => 'Bahasa Belanda'],
            ]
        ],
    ];
    return view('siswa', compact('siswas'));
});

Route::get('/nilai/{nama?}/{pel1?}/{pel2?}/{pel3?}/{pel4?}',
function (
    $nama = "Lia Amelia",
    $pel1 = "90",
    $pel2 = "80",
    $pel3 = "100",
    $pel4 = "95") {
    echo "<h2>Data Nilai</h2>";
    echo "<p>Nama Lengkap               : " .$nama ."</p>";
    echo "<p>Pelajaran Matematika       : " .$pel1 ."</p>";
    echo "<p>Pelajaran Produktif        : " .$pel2 ."</p>";
    echo "<p>Pelajaran Bahasa Indonesia : " .$pel3 ."</p>";
    echo "<p>Pelajaran Bahasa Inggris   : " .$pel4 ."</p>";
    $rata = ($pel1 + $pel2 + $pel3 + $pel4) / 4;
    echo "<p>Rata Rata :" .$rata ."</p>";
    if ($rata >= 90 && $rata <= 100) {
        $grade = "A";
    }
    elseif ($rata >= 80 && $rata <= 90) {
        $grade = "B";
    }
    elseif ($rata >= 70 && $rata <= 80) {
        $grade = "C";
    }
    elseif ($rata < 70 && $rata >= 0) {
        $grade = "D";
    }
    else{
        $grade = "Nilai Tidak Ada";
    }
    echo "<p>Grade : " .$grade ."</p>";
});


//Optional Parameter dan if (Pesan Makanan)
Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}',
function (
    $makanan = null,
    $minuman = null,
    $cemilan = null) {
    echo "===========================";
    echo "<h2>Warung Rubby</h2>";
    echo "===========================<br>";

    if ($makanan != null && $minuman == null && $cemilan == null) {
        echo "</h2>Silahkan Pesan !</h2><br>";
        echo "Makanan : <b>" .$makanan ."</b><br>";
    }
    elseif ($makanan != null && $minuman != null && $cemilan == null) {
        echo "</h2>Silahkan Pesan !</h2><br>";
        echo "Makanan : <b>" .$makanan ."</b><br>";
        echo "Minuman : <b>" .$minuman ."</b><br>";
    }
    elseif ($minuman != null && $cemilan != null && $makanan != null) {
        echo "</h2>Silahkan Pesan !</h2><br>";
        echo "Makanan : <b>" .$makanan ."</b><br>";
        echo "Minuman : <b>" .$minuman ."</b><br>";
        echo "Cemilan : <b>" .$cemilan ."</b><br>";
    }
    else{
        echo "Silahkan anda Pulang<br>";
    }
});

Route::get('/testmodels', function(){
    $query=App\Models\Post::all();
    return $query;
});

Route::get('test',function(){
$query = App\Models\Post::all();
return view('test', compact('query'));
});

//Latihan Membuat Table (Hasil Json)
Route::get('/barangs', function(){
    $barang=App\Models\barang::all();
    return $barang;
});

Route::get('/pembelis', function(){
    $barang=App\Models\pembeli::all();
    return $barang;
});

Route::get('/pembelians', function(){
    $barang=App\Models\pembelian::all();
    return $barang;
});

Route::get('/pesanans', function(){
    $barang=App\Models\pesanan::all();
    return $barang;
});

Route::get('/supliers', function(){
    $barang=App\Models\suplier::all();
    return $barang;
});

//Menampilkan hasil tabel bentuk text
Route::get('barang',function(){
      $data = App\Models\barang::all();
      return view('barang', compact('data'));
});

Route::get('pesanan',function(){
    $data = App\Models\pesanan::all();
    return view('pesanan', compact('data'));
});

Route::get('pembeli',function(){
    $data = App\Models\pembeli::all();
    return view('pembeli', compact('data'));
});

Route::get('pembelian',function(){
    $data = App\Models\pembelian::all();
    return view('pembelian', compact('data'));
});

Route::get('suplier',function(){
    $data = App\Models\suplier::all();
    return view('suplier', compact('data'));
});

//Menggunakan Controller
Route::get('/barang',[BarangController::class,'tampilkan']);
Route::get('/pesanan',[PesananController::class,'pesan']);
Route::get('/pembeli',[PembeliController::class,'pembeli']);
Route::get('/pembelian',[PembelianController::class,'pembelian']);
Route::get('/suplier',[SuplierController::class,'suplier']);






