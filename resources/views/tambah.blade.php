@extends('master')
@section('title','Tambah Data Pegawai')
@section('konten')
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-outline-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row mx-auto">
            <label for="nama" class="col-xs-3 col-form-label mr-2 ml-2">Nama</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <label for="jabatan" class="col-xs-3 col-form-label mr-2 ml-2">Jabatan</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
            <label for="umur" class="col-xs-3 col-form-label mr-2 ml-2">Umur</label>
            <div class="col-xs-9">
            <input type="number" class="form-control" id="umur" name="umur">
            </div>
            <label for="alamat" class="col-xs-3 col-form-label mr-2 ml-2">Alamat</label>
            <div class="col-xs-9">
            <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
            </div>
        </div>
        <div class="form-group row">

        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success my-2">
	</form>
@endsection
