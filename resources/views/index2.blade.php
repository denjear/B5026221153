@extends('master')
@section('title', 'Keranjang')
@section('konten')
<h3>Keranjang Belanja</h3>

<a href="/keranjangbelanja/beli" class="btn btn-primary"> + Beli Barang</a>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga Per Item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach ($keranjangbelanja as $k)
		<tr>
			<td>{{ $k->ID }}</td>
			<td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah }}</td>
			<td>
                Rp{{ number_format($k->Harga,0,",", ".") }}
            </td>
            <td>
                {{number_format(($k->Jumlah*$k->Harga),0,",", ".")}}</td>
			<td>
				<a href="/keranjangbelanja/batal/{{ $k-> ID }}"class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
