@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('admin.users.update', $user) }}">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Edit Pengguna</div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('admin.users.form')
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Perbarui</button>
                            <a href="{{ route('admin.users.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
