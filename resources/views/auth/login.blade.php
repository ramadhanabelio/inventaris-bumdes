@extends('layouts.auth')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 500px;">
            <div class="text-center mb-3">
                <img src="../assets/img/logo.png" alt="navbar brand" class="navbar-brand" width="23%" /> &nbsp;
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group mb-3">
                    <label for="login">Username atau Email</label>
                    <input type="text" name="login" class="form-control" value="{{ old('login') }}" required
                        autofocus>
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="d-grid gap-2 mt-3 text-center">
                    <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                    <a href="{{ route('register') }}" class="btn btn-link mt-3">Belum punya akun? Daftar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
