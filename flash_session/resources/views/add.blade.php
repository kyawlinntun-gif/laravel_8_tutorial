<h1>Add Member</h1>

@if(session()->has('user'))
    <h3 style="color: green">{{ session()->get('user') }}</h3>
@endif

<form action="add" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter your name" /> <br><br>
    <input type="password" name="password" placeholder="Enter your password" /> <br><br>
    <input type="submit" value="Add">
</form>