<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    @vite('resources/css/app.css')
</head>
<body>

    @include('components.header')

    <div class="content">
        @yield('content')
    </div>

    @include('components.footer')

</body>
</html>
