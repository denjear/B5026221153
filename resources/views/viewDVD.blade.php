@extends('master')
@section('title','View Data Pegawai')
@section('konten')
<body>

    <div class="text-center my-3">
        <h1>Data DVD</h1>
    </div>
	@foreach ($dvd as $d)
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="border border-primary rounded mx-3 mb-3" style="height: 25vh; border-width: 3px !important ">
                </div>
            </div>
            <div class="col-6">
                <div class="row my-2">
                    <div class="col-4">
                        <b>Merk DVD</b>
                    </div>
                    <div class="col-8">
                        <b>: </b>{{ $d->merkdvd }}
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                        <b>Stock DVD</b>
                    </div>
                    <div class="col-8">
                        <b>: </b>{{ $d->stockdvd }}
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                        <b>Ketersediaan</b>
                    </div>
                    <div class="col-8">
                        <b>: </b>{{ $d->tersedia }}
                    </div>
                </div>
                <div class="text-center">
                    <a href="/dvd" class='btn btn-outline-primary my-2'> OK </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
