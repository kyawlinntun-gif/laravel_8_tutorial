<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>
</head>
<body>
    <h1>Upload File</h1>
    <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo"> <br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>