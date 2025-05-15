@csrf

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="user_id">Peminjam</label>
            <select name="user_id" class="form-control" required>
                <option value="">Pilih Peminjam</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}"
                        {{ old('user_id', $loan->user_id ?? '') == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="item_id">Barang</label>
            <select name="item_id" class="form-control" required>
                <option value="">Pilih Barang</option>
                @foreach ($items as $item)
                    <option value="{{ $item->id }}"
                        {{ old('item_id', $loan->item_id ?? '') == $item->id ? 'selected' : '' }}>
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="borrowed_date">Tanggal Pinjam</label>
            <input type="date" name="borrowed_date" class="form-control"
                value="{{ old('borrowed_date', $loan->borrowed_date ?? '') }}" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="return_date">Tanggal Kembali</label>
            <input type="date" name="return_date" class="form-control"
                value="{{ old('return_date', $loan->return_date ?? '') }}" required>
        </div>
    </div>

    @if (isset($loan))
        <div class="col-md-6">
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" required>
                    @foreach (['Dipinjam', 'Disetujui', 'Ditolak'] as $status)
                        <option value="{{ $status }}"
                            {{ old('status', $loan->status ?? '') == $status ? 'selected' : '' }}>
                            {{ $status }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
</div>
