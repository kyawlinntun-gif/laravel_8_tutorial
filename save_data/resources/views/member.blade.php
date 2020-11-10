<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Member</title>
</head>
<body>
    <form action="{{ url('member') }}" method="post">
        @csrf
        Name: <input type="text" name="name" > <br><br>
        Email: <input type="email" name="email" > <br><br>
        Address: <input type="text" name="address"> <br><br>
        <button type="submit">Add member</button>
    </form>
</body>
</html>