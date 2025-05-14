@extends('layouts.app')

@section('content')
    <h3>Edit Data Barang</h3>
    <form action="{{ route('admin.items.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.items.form')
    </form>
@endsection
