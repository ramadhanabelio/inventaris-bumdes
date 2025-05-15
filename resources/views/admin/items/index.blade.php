@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">
                                Daftar Barang
                            </div>
                            <div class="card-tools d-flex">
                                <a href="{{ route('admin.items.export.pdf') }}" class="btn btn-danger btn-round btn-sm mr-2">
                                    <span class="btn-label">
                                        <i class="fa fa-file-pdf ml-1 mr-2"></i>
                                    </span>
                                    Cetak Data
                                </a>
                                <a href="{{ route('admin.items.create') }}" class="btn btn-info btn-round btn-sm">
                                    <span class="btn-label">
                                        <i class="fa fa-plus ml-1 mr-2"></i>
                                    </span>
                                    Tambah Barang
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
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Merk</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Kondisi</th>
                                        <th>QR Code</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}.</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->category->name ?? '-' }}</td>
                                            <td>{{ $item->brand }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->condition }}</td>
                                            <td>
                                                <a class="btn btn-link btn-secondary btn-lg" data-toggle="modal"
                                                    data-target="#qrModal{{ $item->id }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <div class="modal fade" id="qrModal{{ $item->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="qrModalLabel{{ $item->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-sm modal-dialog-centered"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">QR Code - {{ $item->name }}</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Tutup">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                {!! QrCode::size(200)->generate(route('admin.items.detail', $item->id)) !!}
                                                                <p class="mt-2">Scan untuk detail barang</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{ route('admin.items.edit', $item) }}"
                                                        class="btn btn-link btn-primary btn-lg" data-toggle="tooltip"
                                                        title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form method="POST" action="{{ route('admin.items.destroy', $item) }}"
                                                        style="display: inline"
                                                        onsubmit="return confirm('Apa anda yakin ingin menghapus?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-link btn-danger"
                                                            data-toggle="tooltip" title="Delete">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>
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
