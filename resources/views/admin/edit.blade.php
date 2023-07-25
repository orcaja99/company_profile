<!-- resources/views/admin/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Admin</title>
</head>
<body>
    <h1>Edit Admin</h1>

    <form action="{{ route('admin.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="{{ $admin->username }}" required>
        <br>
        <label for="password">Password (optional):</label>
        <input type="password" id="password" name="password">
        <br>
        <button type="submit">Update Admin</button>
    </form>
</body>
</html>
