<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
//Membuat Method
  public function tampilkan(){
      $brg=barang::all();
      return view('barang',compact('brg'));
  }
}
