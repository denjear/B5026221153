@extends('master')
@section('title','View Data Pegawai')
@section('konten')
<body>

    <div class="text-center my-3">
        <h1>Data Pegawai</h1>
    </div>
	@foreach ($pegawai as $p)
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="border border-primary rounded mx-3 mb-3" style="height: 25vh; border-width: 3px !important ">
                </div>
            </div>
            <div class="col-6">
                <div class="my-2">
                   <b>Nama:</b> {{ $p->pegawai_nama }}
                </div>
                <div class="my-2">
                    <b>Jabatan:</b> {{ $p->pegawai_jabatan }}
                </div>
                <div class="my-2">
                    <b>Umur:</b> {{ $p->pegawai_umur }}
                </div>
                <div class="my-2">
                    <b>Alamat:</b> {{ $p->pegawai_alamat }}
                </div>
                <div class="text-center">
                    <a href="/pegawai" class='btn btn-outline-primary my-2'> OK </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
