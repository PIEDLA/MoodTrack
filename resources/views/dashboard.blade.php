<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado emocional</title>
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
                        Inicio
                    </a>
                </li>

                <li>
                    <a href="/logout">
                        Cerrar Sesión 
                    </a>
                </li>

                <label for="check" class="esconder-menu">
                    ✖
                </label>
            </ul>
        </nav>

    </header>
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
    <main>

        <section class="hero">
            <img src="/img/logob.png" alt="Logo MoodTrack" class="logo-hero">
            <h2>
                Hola, {{ Auth::user()->name }} 👋
            </h2>
            <p>
                ¿Cómo te sientes hoy?
            </p>
        </section>

        <!-- FORMULARIO -->
        <section id="loginForm">
            <h2>Registrar emoción</h2>
            <form action="/emocion" method="POST">
                @csrf
                <label>
                    ¿Cómo te sientes?
                </label>

                <select
                name="emocion"
                required>
                    <option value="">Selecciona</option>
                    <option>Feliz</option>
                    <option>Triste</option>
                    <option>Estresado</option>
                    <option>Cansado</option>
                    <option>Enfermo</option>
                    <option>Deprimido</option>
                    <option>Aburrido</option>
                    <option>Ansioso</option>
                    <option>Emocionado</option>
                    <option>Optimista</option>
                    <option>Pesimista</option>
                </select>

                <label>
                    Comentario
                </label>

                <textarea name="comentario" required></textarea>

                <button type="submit"> Guardar </button>
            </form>
        </section>

        <section id="registroForm">
            <h2>
                Historial emocional 
            </h2>
            @foreach($emociones as $emocion)
                <div class="historial-card">
                    <h3>
                        {{ $emocion->emocion }}
                    </h3>
                    <p>
                        {{ $emocion->comentario }}
                    </p>
                    <small>
                        {{ $emocion->created_at }}
                    </small>
                    <div class="botones">
                        <a href="/editar/{{ $emocion->id }}" class="btn-editar"> Editar </a>
                        <a href="/eliminar/{{ $emocion->id }}" class="btn-eliminar" 
                        onclick="return confirm('¿Estás segur@ de querer eliminar esta emoción?')"> Elimina </a>
                    </div>
                </div>
            @endforeach
        </section>
    </main>

    <footer>
        <p>
            © 2026 MoodTrack - Todos los derechos reservados a Luis Guillermo Piedrahita & Valeria Rivera Uribe
        </p>
    </footer>

</body>
</html>