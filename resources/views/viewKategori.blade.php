@extends('master')
@section('title','View Kategori')
@section('konten')

@foreach ($kategori as $k)
<div class="container">
    <h3>Anda telah memilih Kategori dengan kode: {{ $k->ID }} </h3>
</div>
@endforeach

@endsection
