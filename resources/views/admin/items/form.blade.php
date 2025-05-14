@csrf

<div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="category_id">Kategori</label>
            <select name="category_id" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}"
                        {{ old('category_id', $item->category_id ?? '') == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="name">Nama Barang</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $item->name ?? '') }}"
                required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="brand">Merk</label>
            <input type="text" name="brand" class="form-control" value="{{ old('brand', $item->brand ?? '') }}">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="origin">Asal</label>
            <input type="text" name="origin" class="form-control" value="{{ old('origin', $item->origin ?? '') }}">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="quantity">Jumlah</label>
            <input type="number" name="quantity" class="form-control"
                value="{{ old('quantity', $item->quantity ?? '') }}" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="type">Jenis</label>
            <input type="text" name="type" class="form-control" value="{{ old('type', $item->type ?? '') }}">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="acquired_date">Tanggal Perolehan</label>
            <input type="date" name="acquired_date" class="form-control"
                value="{{ old('acquired_date', $item->acquired_date ?? '') }}">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="price">Harga</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $item->price ?? '') }}">
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                @foreach (['Diproses', 'Diterima', 'Ditolak'] as $val)
                    <option value="{{ $val }}"
                        {{ old('status', $item->status ?? '') == $val ? 'selected' : '' }}>{{ $val }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="condition">Kondisi</label>
            <select name="condition" class="form-control" required>
                @foreach (['Baik', 'Rusak'] as $val)
                    <option value="{{ $val }}"
                        {{ old('condition', $item->condition ?? '') == $val ? 'selected' : '' }}>{{ $val }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="image">Gambar</label>
            <input type="file" name="image" class="form-control">
            @if (!empty($item->image))
                <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar" class="mt-2" width="120">
            @endif
        </div>
    </div>
</div>

<div class="form-group mt-3">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('admin.items.index') }}" class="btn btn-secondary">Kembali</a>
</div>
