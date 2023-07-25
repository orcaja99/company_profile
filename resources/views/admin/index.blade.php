<!-- resources/views/admin/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin List</title>
</head>
<body>
    <h1>Admin List</h1>
    <a href="{{ route('admin.create') }}">Add New Admin</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admins as $admin)
            <tr>
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->username }}</td>
                <td>
                    <a href="{{ route('admin.edit', $admin->id) }}">Edit</a>
                    <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this admin?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
