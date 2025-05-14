@csrf

<div class="row">
    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name ?? '') }}" required>
        </div>
    </div>

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control"
                value="{{ old('username', $user->username ?? '') }}" required>
        </div>
    </div>

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}"
                required>
        </div>
    </div>

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="password">Password
                @if (isset($user))
                    <small>(Kosongkan jika tidak diubah)</small>
                @endif
            </label>
            <input type="password" name="password" class="form-control" {{ isset($user) ? '' : 'required' }}>
        </div>
    </div>

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="phone_number">Nomor Telepon</label>
            <input type="text" name="phone_number" class="form-control"
                value="{{ old('phone_number', $user->phone_number ?? '') }}" required>
        </div>
    </div>

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="address">Alamat</label>
            <textarea name="address" class="form-control" required>{{ old('address', $user->address ?? '') }}</textarea>
        </div>
    </div>
</div>
