@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">
                                Detail Barang - {{ $item->name }}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center mb-3">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                    class="img-fluid rounded" style="max-height: 250px;">
                            </div>
                            <div class="col-md-8">
                                <div class="table-responsive">
                                    <table class="table table-bordered border border-light table-striped table-hover">
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
                                            <td>
                                                @if ($item->status === 'Diproses')
                                                    <span class="badge bg-warning text-dark">Diproses</span>
                                                @elseif ($item->status === 'Diterima')
                                                    <span class="badge bg-success text-white">Diterima</span>
                                                @elseif ($item->status === 'Ditolak')
                                                    <span class="badge bg-danger text-white">Ditolak</span>
                                                @else
                                                    <span class="badge bg-secondary text-white">{{ $item->status }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Kondisi</th>
                                            <td>
                                                @if (strtolower($item->condition) === 'baik')
                                                    <span class="badge bg-success text-white">Baik</span>
                                                @else
                                                    <span class="badge bg-danger text-white">{{ $item->condition }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
