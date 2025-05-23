@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">
                                Daftar Peminjaman
                            </div>
                            <div class="card-tools d-flex">
                                <a href="{{ route('admin.loans.export.pdf') }}" class="btn btn-danger btn-round btn-sm mr-2">
                                    <span class="btn-label">
                                        <i class="fa fa-file-pdf ml-1 mr-2"></i>
                                    </span>
                                    Cetak Data
                                </a>
                                <a href="{{ route('admin.loans.create') }}" class="btn btn-info btn-round btn-sm">
                                    <span class="btn-label">
                                        <i class="fa fa-plus ml-1 mr-2"></i>
                                    </span>
                                    Tambah Peminjaman
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Peminjam</th>
                                        <th>Nama Barang</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Status</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($loans as $index => $loan)
                                        <tr>
                                            <td>{{ $index + 1 }}.</td>
                                            <td>{{ $loan->user->name }}</td>
                                            <td>{{ $loan->item->name }}</td>
                                            <td>{{ $loan->borrowed_date }}</td>
                                            <td>{{ $loan->return_date }}</td>
                                            <td>{{ $loan->status }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    @if ($loan->status == 'Dipinjam')
                                                        <form action="{{ route('admin.loans.approve', $loan) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success btn-sm mr-2"
                                                                onclick="return confirm('Setujui peminjaman ini?')">
                                                                <i class="fa fa-check mr-2"></i> Setujui
                                                            </button>
                                                        </form>
                                                        <form action="{{ route('admin.loans.reject', $loan) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-sm me-1"
                                                                onclick="return confirm('Tolak peminjaman ini?')">
                                                                <i class="fa fa-times mr-2"></i> Tolak
                                                            </button>
                                                        </form>
                                                        {{-- <a href="{{ route('admin.loans.edit', $loan) }}"
                                                            class="btn btn-link btn-primary btn-lg" data-toggle="tooltip"
                                                            title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <form method="POST"
                                                            action="{{ route('admin.loans.destroy', $loan) }}"
                                                            style="display: inline"
                                                            onsubmit="return confirm('Apa anda yakin ingin menghapus?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-link btn-danger"
                                                                data-toggle="tooltip" title="Delete">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </form> --}}
                                                    @else
                                                        <span
                                                            class="badge {{ $loan->status == 'Disetujui' ? 'badge-success' : 'badge-danger' }}">
                                                            {{ $loan->status }}
                                                        </span>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
