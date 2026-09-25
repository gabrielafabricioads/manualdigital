<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Reconectando') — Manuais de Redes</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="topo">
        <a href="{{ route('home') }}" class="marca">Reconectando</a>
        <span class="idioma">pt-br / eng</span>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="rodape">
        <p>Reconectando — manuais de redes fáceis de entender.</p>
        <p>Trabalho interdisciplinar: Redes de Computadores, Português e Inglês — 2026.</p>
    </footer>
</body>
</html>
