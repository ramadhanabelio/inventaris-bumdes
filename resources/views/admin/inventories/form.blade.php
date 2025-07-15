@csrf

<div class="row">
    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $inventory->name ?? '') }}"
                required>
        </div>
    </div>

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="category">Kategori</label>
            <input type="text" name="category" class="form-control"
                value="{{ old('category', $inventory->category ?? '') }}">
        </div>
    </div>

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="unit">Satuan</label>
            <input type="text" name="unit" class="form-control" value="{{ old('unit', $inventory->unit ?? '') }}">
        </div>
    </div>

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" class="form-control"
                value="{{ old('price', $inventory->price ?? '') }}" required>
        </div>
    </div>
</div>
