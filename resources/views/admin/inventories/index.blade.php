@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Daftar Peralatan</div>
                            <div class="card-tools d-flex">
                                <a href="{{ route('admin.inventories.export.pdf') }}"
                                    class="btn btn-danger btn-round btn-sm mr-2">
                                    <span class="btn-label">
                                        <i class="fa fa-file-pdf ml-1 mr-2"></i>
                                    </span>
                                    Cetak Data
                                </a>
                                <a href="{{ route('admin.inventories.create') }}" class="btn btn-info btn-round btn-sm">
                                    <span class="btn-label">
                                        <i class="fa fa-plus ml-1 mr-2"></i>
                                    </span>
                                    Tambah Peralatan
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
                                        <th>Satuan</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventories as $index => $inv)
                                        <tr>
                                            <td>{{ $index + 1 }}.</td>
                                            <td>{{ $inv->name }}</td>
                                            <td>{{ $inv->category ?? '-' }}</td>
                                            <td>{{ $inv->unit ?? '-' }}</td>
                                            <td>Rp. {{ number_format($inv->price, 0, ',', '.') }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{ route('admin.inventories.edit', $inv) }}"
                                                        class="btn btn-link btn-primary btn-lg" data-toggle="tooltip"
                                                        title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form method="POST"
                                                        action="{{ route('admin.inventories.destroy', $inv) }}"
                                                        style="display: inline"
                                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-link btn-danger"
                                                            data-toggle="tooltip" title="Hapus">
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
