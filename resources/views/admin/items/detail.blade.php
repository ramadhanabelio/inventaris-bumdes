@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Barang</h2>
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>{{ $item->name }}</td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td>{{ $item->category->name ?? '-' }}</td>
            </tr>
            <tr>
                <th>Merk</th>
                <td>{{ $item->brand }}</td>
            </tr>
            <tr>
                <th>Asal</th>
                <td>{{ $item->origin }}</td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td>{{ $item->quantity }}</td>
            </tr>
            <tr>
                <th>Jenis</th>
                <td>{{ $item->type }}</td>
            </tr>
            <tr>
                <th>Tanggal Perolehan</th>
                <td>{{ \Carbon\Carbon::parse($item->acquired_date)->format('d F Y') }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>Rp. {{ number_format($item->price, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $item->status }}</td>
            </tr>
            <tr>
                <th>Kondisi</th>
                <td>{{ $item->condition }}</td>
            </tr>
            <tr>
                <th>Gambar</th>
                <td><img src="{{ asset('storage/' . $item->image) }}" width="150"></td>
            </tr>
        </table>
    </div>
@endsection
