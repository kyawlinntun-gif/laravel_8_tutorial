<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>User Login</h1>
    <form method="post" action="{{ url('user') }}">
        @csrf
        <input type="text" name="name" placeholder="Enter your name"> <br><br>
        <input type="password" name="password" placeholder="Enter your password"> <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>