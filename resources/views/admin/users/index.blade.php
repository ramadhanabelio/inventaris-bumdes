<h2>User List</h2>
<a href="{{ route('admin.users.create') }}">Add User</a>
<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }} - {{ $user->email }}
            <a href="{{ route('admin.users.edit', $user) }}">Edit</a>
            <form method="POST" action="{{ route('admin.users.destroy', $user) }}" style="display:inline">
                @csrf @method('DELETE')
                <button onclick="return confirm('Delete?')">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
