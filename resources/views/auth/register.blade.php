@extends('layouts.app')

@section('content')
    <form method="POST" action="/register">
        @csrf
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password_confirmation" placeholder="Confirm Password">
        <input type="text" name="phone_number" placeholder="Phone Number">
        <textarea name="address" placeholder="Address"></textarea>
        <button type="submit">Register</button>
    </form>
@endsection
