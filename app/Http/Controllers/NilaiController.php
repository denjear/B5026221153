<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller{
    public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $nilaikuliah = DB::table('nilaikuliah')->get();
            // ->orderBy('id','asc');
    	// mengirim data pegawai ke view index
		return view('indexNilaiKuliah',['nilaikuliah' => $nilaikuliah]);
	}
    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
		// memanggil view tambah
		return view('tambahNilai');
	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'ID' => $request->ID,
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}

}
