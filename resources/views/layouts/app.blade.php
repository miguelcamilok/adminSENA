<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ADMIN SENA')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap -->

</head>
<body class="d-flex flex-column min-vh-100">

    @include('includes.navbar') {{-- Tu navbar o header --}}

    <main class="flex-fill container py-4">
        @yield('content') {{-- Aquí se muestra el contenido de las vistas --}}
    </main>

    @include('includes.footer') {{-- El footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>