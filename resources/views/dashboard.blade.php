<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to Your Dashboard</h1>
    
    <div>
        <img src="{{ auth()->user()->avatar }}" alt="Profile Image">
        <h2>{{ auth()->user()->name }}</h2>
        <p>{{ auth()->user()->email }}</p>
    </div>
    
    <a href="{{ url('/logout') }}">Logout</a>
</body>
</html>
