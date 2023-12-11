@extends('master')
@section('title','EAS')
@section('konten')



<div class="container">
    <h2>Pilih Kategori</h2>
        <select name="Kategori" id="Kategori" class="form-control col-3">
            @foreach($kategori as $k)
                <option value="{{ $k->ID }}">{{ $k->Nama }}</option>
            @endforeach
        </select>
        <br>
    <a href="/kategori/view/{{ $k->ID }}" class='btn btn-primary'>Kirim</a>
</div>


@endsection
