<html>
<head>
    <title>Welcome to Your Laravel App</title>
</head>
<body>
    <div>
        <h1>Welcome to Your Laravel App</h1>
        <p>This is a simple welcome page.</p>
        <p>Please register or log in to continue:</p>
        <div>
            @if (Route::has('login'))
                <a href="{{ route('login') }}">Log in</a>
            @endif

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        </div>
    </div>
</body>
</html>
