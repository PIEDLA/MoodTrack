<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="icon" href="/img/logoch.png">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo">
            <img src="/img/logob.png" alt="Logo MoodTrack">
            <h1>MoodTrack</h1>
        </div>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="mostrar-menu">
                ☰
            </label>
            <ul class="menu">
                <li>
                    <a href="/">
                        Inicio
                    </a>
                </li>
                <label for="check" class="esconder-menu">
                    ✖
                </label>
            </ul>
        </nav>
    </header>

    @if (session('error'))
        <div class="mensaje error">

            {{ session('error') }}

        </div>
    @endif

    <main>

        <section class="hero">

            <img src="/img/logob.png" alt="Logo MoodTrack" class="logo-hero">

            <h2> Bienvenid@ </h2>
            <p> Inicia sesión para registrar tus emociones </p>

        </section>

        <form id="loginForm" action="/login" method="POST">
            @csrf
            <h2> Iniciar Sesión </h2>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Contraseña</label>
            <input type="password" name="password" required>
            <button type="submit"> Ingresar </button>
        </form>
    </main>

    <footer>
        <p>
            © 2026 MoodTrack - Todos los derechos reservados a Luis Guillermo Piedrahita & Valeria Rivera Uribe
        </p>
    </footer>

</body>
</html>
