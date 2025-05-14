@extends('layouts.app')

@section('content')
    <h1>Items</h1>
    <a href="{{ route('admin.items.create') }}" class="btn btn-primary mb-2">Add New Item</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Condition</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->category->name ?? '-' }}</td>
                    <td>{{ $item->brand }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->condition }}</td>
                    <td>
                        <a href="{{ route('admin.items.edit', $item) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.items.destroy', $item) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
