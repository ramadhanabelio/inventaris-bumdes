@extends('layouts.app')

@section('content')
    <h1>Create New User</h1>

    <form action="{{ route('admin.users.store') }}" method="POST">
        @include('admin.users.form')
    </form>
@endsection
