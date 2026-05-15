<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoodTrack</title>
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
                <li>
                    <a href="/login">
                        Iniciar Sesión
                    </a>
                </li>

                <label for="check" class="esconder-menu">
                    ✖
                </label>
            </ul>
        </nav>
    </header>


    <main>

        @if(session('success'))
            <div class="mensaje success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="mensaje error">
                {{ session('error') }}
            </div>
        @endif

        <section class="hero">
            <img
            src="/img/logob.png"
            alt="Logo MoodTrack"
            class="logo-hero">
            <h1> Bienvenid@ a MoodTrack </h1>

            <h2> Registra cómo te sientes </h2>

            <p> Una forma sencilla de entender tus emociones día a día. </p>
        </section>

        <div class="contenedor-formularios">

            <form id="registroForm" action="/register" method="POST">
                @csrf
                <h2> Registro </h2>
                <label> Nombre </label>
                <input type="text" name="nombre" required>
                <label> Apellido </label>
                <input type="text" name="apellido" required>
                <label>Edad</label>
                <input type="number" name="edad" min="1" required>
                <label>Género</label> 
                <select name="genero" required>
                    <option value=""> Selecciona</option>
                    <option value="Femenino"> Femenino </option>
                    <option value="Masculino">Masculino</option>
                    <option value="Otro"> Otro</option>
                </select>
                <label> Email </label>
                <input type="email" name="email" required>
                <label>Contraseña </label>

                <input type="password" name="password" required>
                <button type="submit">
                    Registrarse
                </button>
            </form>
        </div>
    </main>

    <footer>
        <p>
            © 2026 MoodTrack - Todos los derechos reservados a Luis Guillermo Piedrahita & Valeria Rivera Uribe
        </p>
    </footer>
</body>
</html>