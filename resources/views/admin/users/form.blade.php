@csrf
@if (isset($user))
    @method('PUT')
@endif

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $user->name ?? '') }}" required>
</div>

<div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" value="{{ old('username', $user->username ?? '') }}"
        required>
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}" required>
</div>

@if (!isset($user))
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
@else
    <div class="form-group">
        <label for="password">Password <small>(Kosongkan jika tidak diubah)</small></label>
        <input type="password" name="password" class="form-control">
    </div>
@endif

<div class="form-group">
    <label for="phone_number">Phone Number</label>
    <input type="text" name="phone_number" class="form-control"
        value="{{ old('phone_number', $user->phone_number ?? '') }}" required>
</div>

<div class="form-group">
    <label for="address">Address</label>
    <textarea name="address" class="form-control" required>{{ old('address', $user->address ?? '') }}</textarea>
</div>

<button type="submit" class="btn btn-primary">
    {{ isset($user) ? 'Update User' : 'Create User' }}
</button>
