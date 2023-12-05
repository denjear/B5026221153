@extends('master')
@section('title', 'Beli')
@section('konten')

    <a href="/keranjangbelanja"> Kembali </a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
	{{ csrf_field() }}
		{{-- Kode Barang --}}
		<div class = "form-group row">
			<label for = "kodebarang" class = "col-sm-2 control label">Kode Barang</label>
			<div class = "col-sm-8">
			 <input type="text" required="required" name="kodebarang" id="kodebarang" class="form-control"> <br/>
			</div>
		</div>
		{{-- Jumlah --}}
		<div class = "form-group row">
			<label for = "jabatan" class = "col-sm-2 control label">Jumlah</label>
			<div class = "col-sm-8">
            <input type="text" required="required" name="jumlah" id="jumlah" class="form-control"> <br/>
			 </div>
		</div>
		{{-- Harga --}}
		<div class = "form-group row">
			<label for = "umur" class = "col-sm-2 control label">Harga</label>
			<div class = "col-sm-8">
			<input type="text" required="required" name="harga" id="harga" class="form-control"> <br/> <br/>
			 </div>
		</div>

		<input type="submit" class="btn btn-primary" value="Beli Barang">
	</form>
@endsection
