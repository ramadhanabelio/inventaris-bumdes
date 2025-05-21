@csrf

<div class="row">
    <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="categoryName">Nama Kategori</label>
            <input type="text" class="form-control" id="categoryName" name="name"
                value="{{ old('name', $category->name ?? '') }}" placeholder="Masukkan Nama Kategori" required>
        </div>
    </div>
</div>
