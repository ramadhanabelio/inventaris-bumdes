@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('admin.categories.store') }}">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Tambah Kategori</div>
                            </div>
                        </div>
                        <div class="card-body">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="categoryName">Nama Kategori</label>
                                        <input type="text" class="form-control" id="categoryName" name="name"
                                            placeholder="Masukkan Nama Kategori" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Simpan</button>
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
