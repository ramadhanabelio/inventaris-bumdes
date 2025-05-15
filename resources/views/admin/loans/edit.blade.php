@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('admin.loans.update', $loan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Edit Peminjaman</div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('admin.loans.form')
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Perbarui</button>
                            <a href="{{ route('admin.loans.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
