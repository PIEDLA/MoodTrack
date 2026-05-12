<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar emoción</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/img/logoch.png">
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
                    <a href="/dashboard">
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="/logout">
                        Cerrar Sesión ✖
                    </a>
                </li>

                <label for="check" class="esconder-menu">
                    ✖
                </label>
            </ul>
        </nav>
    </header>

    <main>

        <section class="hero">
            <img src="/img/logob.png" alt="Logo MoodTrack" class="logo-hero">
            <h2>
                Editar emoción 
            </h2>
            <p>
                Actualiza cómo te sentías ese día
            </p>
        </section>

        <section id="loginForm">
            <h2>
                Actualizar emoción
            </h2>
            <form action="/actualizar/{{ $emocion->id }}" method="POST">
                @csrf
                <label> ¿Cómo te sentías? </label>
                <select name="emocion" required>
                    <option {{ $emocion->emocion == 'Feliz' ? 'selected' : '' }}> Feliz </option>
                    <option {{ $emocion->emocion == 'Triste' ? 'selected' : '' }}>Triste</option>
                    <option {{ $emocion->emocion == 'Estresado' ? 'selected' : '' }}> Estresado </option>
                    <option {{ $emocion->emocion == 'Cansado' ? 'selected' : '' }}> Cansado </option>
                    <option {{ $emocion->emocion == 'Enfermo' ? 'selected' : '' }}> Enfermo </option>
                    <option {{ $emocion->emocion == 'Deprimido' ? 'selected' : '' }}> Deprimido </option>
                    <option {{ $emocion->emocion == 'Aburrido' ? 'selected' : '' }}> Aburrido </option>
                    <option {{ $emocion->emocion == 'Ansioso' ? 'selected' : '' }}> Ansioso </option>
                    <option {{ $emocion->emocion == 'Emocionado' ? 'selected' : '' }}> Emocionado </option>
                    <option {{ $emocion->emocion == 'Optimista' ? 'selected' : '' }}> Optimista </option>
                    <option {{ $emocion->emocion == 'Pesimista' ? 'selected' : '' }}> Pesimista </option>
                </select>

                <label>
                    Comentario
                </label>

                <textarea name="comentario" required>{{ $emocion->comentario }}</textarea>

                <div class="botones">
                    <button type="submit">
                        Actualizar
                    </button>

    <a href="/dashboard" class="btn-cancelar"> Cancelar </a>

</div>
            </form>
        </section>
    </main>

    <footer>
        <p>
            © 2026 MoodTrack - Todos los derechos reservados a Luis Guillermo Piedrahita & Valeria Rivera Uribe
        </p>
    </footer>

</body>
</html>