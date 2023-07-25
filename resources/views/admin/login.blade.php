<!-- resources/views/admin/login.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    @if($errors->any())
        <div>{{ $errors->first() }}</div>
    @endif
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <label>Email:</label>
        <input type="text" name="email" value="{{ old('email') }}" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
