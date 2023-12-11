<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EASController extends Controller{

    public function index()
	{
    	// mengambil data dari table kategori
        $kategori = DB::table('kategori')
            ->get();
    	// mengirim data kategori ke view index
		return view('indexEAS',['kategori' => $kategori]);
	}

    public function view($ID)
	{
		// mengambil  data kategori berdasarkan ID yang dipilih
		$kategori = DB::table('kategori')->where('ID',$ID)->get();
		// passing  data kategori yang didapat ke view viewKategori.blade.php
		return view('viewKategori',['kategori' => $kategori]);
	}

}
