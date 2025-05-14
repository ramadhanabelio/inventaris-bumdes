<h2>Add Category</h2>
<form method="POST" action="{{ route('admin.categories.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Category Name" required>
    <button type="submit">Save</button>
</form>
