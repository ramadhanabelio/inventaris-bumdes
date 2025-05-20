@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">
                                Daftar Pengguna
                            </div>
                            <div class="card-tools">
                                <a href="{{ route('admin.users.create') }}" class="btn btn-info btn-round btn-sm mr-2">
                                    <span class="btn-label">
                                        <i class="fa fa-plus ml-1 mr-2"></i>
                                    </span>
                                    Tambah Pengguna
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
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Nomor HP</th>
                                        <th>Alamat</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $index => $user)
                                        <tr>
                                            <td>{{ $index + 1 }}.</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->phone_number }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{ route('admin.users.edit', $user) }}"
                                                        class="btn btn-link btn-primary btn-lg" data-toggle="tooltip"
                                                        title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form method="POST" action="{{ route('admin.users.destroy', $user) }}"
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
