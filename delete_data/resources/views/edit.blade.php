<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit member</title>
</head>
<body>
    <form action="{{ url('member/' . $member->id) }}" method="post">
        @csrf
        @method('patch')
        Name: <input type="text" value="{{ $member->name }}" name="name"> <br><br>
        Email: <input type="email" value="{{ $member->email }}" name="email"> <br><br>
        Address: <input type="text" value="{{ $member->address }}" name="address"> <br><br>
        <button type="submit">Edit Member</button>
    </form>
</body>
</html>