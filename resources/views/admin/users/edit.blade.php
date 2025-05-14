@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @include('admin.users.form', ['user' => $user])
    </form>
@endsection
