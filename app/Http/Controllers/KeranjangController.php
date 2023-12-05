<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{
	public function index2()
	{
    	// mengambil data dari table keranjangbelanja
		$keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data keranjangbelanja ke view index
		return view('index2',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form beli barang
	public function beli()
	{

		// memanggil view tambah
		return view('beli');

	}
    // method untuk insert data ke table keranjang
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}

	// method untuk membatalkan pesanan
	public function batal($id)
	{
		// menghapus data barang berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}


}
