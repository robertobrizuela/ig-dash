<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Insta Dashboard')</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-900 text-white flex">

    <!-- Sidebar / Menú principal usando el componente -->
    <x-menu />

    <!-- Contenido principal -->
    <main class="flex-1 p-10">
        @yield('content')
    </main>

</body>
</html>