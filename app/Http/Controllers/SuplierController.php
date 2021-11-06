<?php

namespace App\Http\Controllers;

use App\Models\suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
//Membuat Method
   public function suplier(){
    $data=suplier::all();
    return view('suplier',compact('data'));
}
}
