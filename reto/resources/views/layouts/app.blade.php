<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wally Palmeras - sitio web académico responsive e interactivo.">
    <title>@yield('title', 'Wally Palmeras')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="{{ route('inicio') }}" aria-label="Wally Palmeras inicio">
            <span class="brand-mark">WP</span>
            <span>Wally Palmeras</span>
        </a>
        <button class="menu-toggle" id="menuToggle" type="button" aria-expanded="false" aria-controls="mainNav">☰</button>
        <nav id="mainNav" aria-label="Navegación principal">
            <a href="{{ route('inicio') }}">Inicio</a>
            <a href="{{ route('contacto') }}">Contacto</a>
            <button class="theme-toggle" id="themeToggle" type="button">🌙 Modo oscuro</button>
        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer class="site-footer">
    <div class="container footer-inner">
        <p>&copy; {{ date('Y') }} Wally Palmeras. Todos los derechos reservados.</p>
        <p>Proyecto académico web responsive.</p>
    </div>
</footer>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
