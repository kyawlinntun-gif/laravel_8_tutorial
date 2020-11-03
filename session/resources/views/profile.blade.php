<h1>User Profile</h1>

<h2>Hello, {{ session()->get('user') }}</h2>

<a href="{{ url('logout') }}">Login</a>