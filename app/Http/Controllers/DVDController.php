<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DVDController extends Controller{

    public function index()
	{
    	// mengambil data dari table dvd
        $dvd = DB::table('dvd')
            ->orderBy('merkdvd','asc')
            ->paginate(5);

    	// mengirim data dvd ke view index
		return view('indexDVD',['dvd' => $dvd]);
	}
    // method untuk menampilkan view form tambah dvd
	public function tambah()
	{
		// memanggil view tambah
		return view('tambahDVD');
	}

	// method untuk insert data ke table dvd
	public function store(Request $request)
	{
		// gunakan ternary operator untuk menentukan kondisi stok
		DB::table('dvd')->insert([
			'merkdvd' => $request->merkdvd,
			'stockdvd' => $request->stockdvd,
            'tersedia'=> ($request->stockdvd > 0) ? 'Y' : 'N'
		]);
		// alihkan halaman ke halaman dvd
		return redirect('/dvd');
	}

    // method untuk edit dvd
	public function edit($kodedvd)
	{
		// mengambil data dvd berdasarkan id yang dipilih
		$dvd = DB::table('dvd')->where('kodedvd',$kodedvd)->get();
		// passing data dvd yang didapat ke view editdvd.blade.php
		return view('editDVD',['dvd' => $dvd]);

	}
    // update data dvd
	public function update(Request $request)
	{
		// update data dvd
		DB::table('dvd')->where('kodedvd', $request->kodedvd)->update([
			'merkdvd' => $request->merkdvd,
			'stockdvd' => $request->stockdvd,
            'tersedia'=> ($request->stockdvd > 0) ? 'Y' : 'N'
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/dvd');
	}

    public function view($kodedvd)
	{
		// mengambil  data dvd berdasarkan kodedvd yang dipilih
		$dvd = DB::table('dvd')->where('kodedvd',$kodedvd)->get();
		// passing  data dvd yang didapat ke view viewDVD.blade.php
		return view('viewDVD',['dvd' => $dvd]);

	}



	// method untuk hapus data dvd
	public function hapus($kodedvd)
	{
		// menghapus  data dvd berdasarkan kodedvd yang dipilih
		DB::table('dvd')->where('kodedvd',$kodedvd)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/dvd');
	}

    public function cari(Request $request)
    {
	// menangkap data pencarian
	$cari = $request->cari;

 	// mengambil data dari table dvd sesuai pencarian data
	$dvd = DB::table('dvd')
	    ->where('merkdvd','like',"%".$cari."%")
	    ->paginate();

    	// mengirim data dvd ke view index
	return view('indexDVD',['dvd' => $dvd,'cari' => $cari]);

    }

}
