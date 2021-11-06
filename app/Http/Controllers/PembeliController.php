<?php

namespace App\Http\Controllers;

use App\Models\pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
//Membuat Method
    public function pembeli(){
    $data=pembeli::all();
    return view('pembeli',compact('data'));
}
}
