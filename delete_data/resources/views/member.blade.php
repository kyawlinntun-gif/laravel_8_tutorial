<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Member Tables</title>
</head>
<body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @else
        <div class="alert alert-danger">
            {{ session('fail') }}
        </div>
    @endif
    <table border="1" style="border-collapse: collapse">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Operation</th>
        </tr>
        @foreach ($members as $member)
            <tr>
                <td>{{ $member->id }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->address }}</td>
                <td><a onclick="event.preventDefault();document.getElementById('delete').submit()" style="cursor: pointer">Delete</a></td>
                <td><a href="{{ url('member/' . $member->id) }}">Edit</a></td>
                <form action="{{ url('member/' . $member->id) }}" method="POST" id="delete" style="display: none">
                    @method('delete')
                    @csrf
                </form>
            </tr>
        @endforeach
    </table>

    {{-- app js --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>