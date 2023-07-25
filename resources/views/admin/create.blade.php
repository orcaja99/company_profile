<!-- resources/views/admin/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Add New Admin</title>
</head>
<body>
    <h1>Add New Admin</h1>

    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Add Admin</button>
    </form>
</body>
</html>
