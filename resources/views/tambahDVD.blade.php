@extends('master')
@section('title','Tambah Data Pegawai')
@section('konten')
<body>

	<h3>Tambah DVD Baru</h3>

	<a href="/dvd" class="btn btn-outline-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/dvd/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkdvd" class="col-sm-2 col-form-label mr-2">Merk DVD</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="merkdvd" name="merkdvd">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockdvd" class="col-sm-2 col-form-label mr-2">Stock DVD</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="stockdvd" name="stockdvd">
            </div>
        </div>
        <div>
            <input type="hidden" id="tersedia" >
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success my-2">
	</form>
@endsection
