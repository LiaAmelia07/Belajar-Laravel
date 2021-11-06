<?php

namespace App\Http\Controllers;
use App\Models\pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
  //Membuat Method
  public function pesan(){
    $data=pesanan::all();
    return view('pesanan',compact('data'));
}
}
