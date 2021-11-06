<?php

namespace App\Http\Controllers;

use App\Models\pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
 //Membuat Method
    public function pembelian(){
    $data=pembelian::all();
    return view('pembelian',compact('data'));
}
}
