@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Riwayat Peminjaman Saya</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Barang</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($loans as $index => $loan)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $loan->item->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($loan->borrowed_date)->translatedFormat('d F Y') }}
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($loan->return_date)->translatedFormat('d F Y') }}
                                            </td>
                                            <td>
                                                <span
                                                    class="badge 
                                                    @if ($loan->status == 'Dipinjam') badge-warning 
                                                    @elseif ($loan->status == 'Disetujui') badge-success 
                                                    @else badge-danger @endif">
                                                    {{ $loan->status }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if ($loans->isEmpty())
                                <p class="text-center mt-3">Belum ada data peminjaman.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
