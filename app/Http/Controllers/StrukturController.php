<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gambar;

class StrukturController extends Controller
{

    public function index(){
    $hasil = Gambar::all();
    		return view('admin/struktur',['gambar'=>$hasil]);
    }
}
