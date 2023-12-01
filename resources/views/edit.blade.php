@extends('master')
@section('title', 'Edit Data Pegawai')
@section('konten')

    <body>

        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Edit Data Pegawai</h3>

        <a href="/pegawai" class="btn btn-primary my-3"> Kembali</a>

        <br />
        <br />

        @foreach ($pegawai as $p)
            <form action="/pegawai/update" method="post">
                {{ csrf_field() }}
                <div class="form-group row mx-auto">
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                    <label for="nama" class="col-xs-3 col-form-label mx-2" style="margin-bottom: 0px">Nama</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
                    </div>
                    <label for="jabatan" class="col-xs-3 col-form-label mx-2">Jabatan</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                    </div>
                    <label for="umur" class="col-xs-3 col-form-label mx-2">Umur</label>
                    <div class="col-xs-9">
                        <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
                    </div>
                    <label for="alamat" class="col-xs-3 col-form-label mx-2">Alamat</label>
                    <div class="col-xs-9">
                        <textarea required="required" class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                    </div>
                </div>
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </form>
        @endforeach

    </body>
@endsection
