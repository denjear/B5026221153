@extends('master')
@section('title','Nilai Kuliah')
@section('konten')

<h1 class="text-center">Nilai Mahasiswa</h1>
<a href="/nilaikuliah/tambah" class='btn btn-primary mb-3'> + Nilai Mahasiswa Baru</a>
<br>
<table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>
    @foreach($nilaikuliah as $n)
    <tr>
        <td>{{ $n->ID }}</td>
        <td>{{ $n->NRP }}</td>
        <td>{{ $n->NilaiAngka }}</td>
        <td>{{ $n->SKS }}</td>
        <td>
            @php
            $nilaiHuruf = '';
            if ($n->NilaiAngka >= 81) {
                $nilaiHuruf = 'A';
            } elseif ($n->NilaiAngka >= 61) {
                $nilaiHuruf = 'B';
            } elseif ($n->NilaiAngka >= 41) {
                $nilaiHuruf = 'C';
            } else {
                $nilaiHuruf = 'D';
            }
            echo $nilaiHuruf;
            @endphp
        </td>
        <td>
            @php
                echo ($n->NilaiAngka*$n->SKS)
            @endphp
        </td>
    </tr>
    @endforeach
</table>
{{-- {{ $nilaikuliah->links() }} --}}
@endsection
