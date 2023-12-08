@extends('master')
@section('title', 'Edit Data DVD')
@section('konten')

    <body>

        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Edit Data DVD</h3>

        <a href="/dvd" class="btn btn-primary my-3"> Kembali</a>

        <br />
        <br />

        @foreach ($dvd as $d)
            <form action="/dvd/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="kodedvd" value="{{ $d->kodedvd }}">

                <div class="form-group row">
                    <label for="merkdvd" class="col-sm-2 col-form-label mr-2">Merk DVD</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" required="required" name="merkdvd" value="{{ $d->merkdvd }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="stockdvd" class="col-sm-2 col-form-label mr-2">Stock DVD</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" required="required" name="stockdvd" value="{{ $d->stockdvd }}">
                    </div>
                </div>

                <input type="submit" value="Simpan Data" class="btn btn-success">
            </form>
        @endforeach
    </body>
@endsection
