<h2>Edit Category</h2>
<form method="POST" action="{{ route('admin.categories.update', $category) }}">
    @csrf @method('PUT')
    <input type="text" name="name" value="{{ $category->name }}" required>
    <button type="submit">Update</button>
</form>
