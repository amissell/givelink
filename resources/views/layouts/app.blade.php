<!-- views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">
    <div class="flex h-screen overflow-hidden">
        @include('layouts.sidebar')

        <div class="flex-1 overflow-auto p-6">
            @yield('content')
        </div>
    </div>
</body>
</html>
