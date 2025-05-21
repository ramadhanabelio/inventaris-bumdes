@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('admin.categories.store') }}" method="POST">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Tambah Kategori</div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('admin.categories.form', ['category' => null])
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
