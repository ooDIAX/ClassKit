<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to ClassKit</title>
    <!-- Add Tailwind CSS CDN or include your Tailwind CSS file here -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col items-center justify-center h-screen">
    <h1 class="text-4xl font-bold mb-4">ClassKit</h1>
    <div> 
        <div>
            <a href="{{ route('register') }}" class="inline-block px-4 py-2 border border-gray-500 rounded-md hover:bg-gray-100 hover:border-gray-600">Register</a>
            <a href="{{ route('login') }}" class="inline-block px-4 py-2 border border-gray-500 rounded-md ml-4 hover:bg-gray-100 hover:border-gray-600">Log In</a>
        </div>
    </div>
</body>
</html>