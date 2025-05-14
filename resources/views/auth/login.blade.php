@extends('layouts.app')

@section('content')
    <form method="POST" action="/login">
        @csrf
        <input type="text" name="login" placeholder="Username or Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
@endsection
