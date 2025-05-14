<h2>Category List</h2>
<a href="{{ route('admin.categories.create') }}">Add Category</a>
<ul>
    @foreach ($categories as $category)
        <li>
            {{ $category->name }}
            <a href="{{ route('admin.categories.edit', $category) }}">Edit</a>
            <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" style="display:inline">
                @csrf @method('DELETE')
                <button onclick="return confirm('Delete?')">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
