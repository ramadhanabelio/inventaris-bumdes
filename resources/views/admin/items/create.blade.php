@extends('layouts.app')

@section('content')
    <h3>Tambah Data Barang</h3>
    <form action="{{ route('admin.items.store') }}" method="POST" enctype="multipart/form-data">
        @include('admin.items.form')
    </form>
@endsection
