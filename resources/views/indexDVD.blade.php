@extends('master')
@section('title','Tabel DVD')
@section('konten')

<h1 class="text-center">Data DVD</h1>
<a href="/dvd/tambah" class='btn btn-primary mb-3'> + DVD Baru</a>
<br>

<p>Cari Nama DVD Berdasarkan Nama:</p>
	<form action="/dvd/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari DVD .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary my-3" type="submit" value="CARI">
	</form>

<br/>

<table class="table table-striped table-hover text-center">
    <tr>
        <th>Kode DVD</th>
        <th>Merk DVD</th>
        <th>Stock DVD</th>
        <th>Tersedia</th>
        <th>Opsi</th>
    </tr>
    @foreach($dvd as $d)
    <tr>
        <td>{{ $d->kodedvd }}</td>
        <td>{{ $d->merkdvd }}</td>
        <td>{{ $d->stockdvd }}</td>
        <td>
            @if ($d->tersedia == 'Y')
                Y
            @else
                N
            @endif
        </td>
        <td>
            <a href="/dvd/view/{{ $d->kodedvd }}" class='btn btn-success'>View</a>
				|
			<a href="/dvd/edit/{{ $d->kodedvd }}" class='btn btn-warning'>Edit</a>
				|
			<a href="/dvd/hapus/{{ $d->kodedvd }}" class='btn btn-danger'>Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
{{ $dvd->links() }}
@endsection
