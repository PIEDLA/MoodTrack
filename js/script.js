const registroForm = document.getElementById("registroForm");

if (registroForm) {
    registroForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const nombre = registroForm.querySelector("input[type='text']").value;
        const email = registroForm.querySelector("input[type='email']").value;
        const password = registroForm.querySelector("input[type='password']").value;

        const usuario = {
            nombre: nombre,
            email: email,
            password: password
        };

        localStorage.setItem("usuarioRegistrado", JSON.stringify(usuario));

        alert("Registro completado. Ya puedes iniciar sesión.");

        registroForm.reset();
    });
}

// LOGIN
const loginForm = document.getElementById("loginForm");

if (loginForm) {
    loginForm.addEventListener("submit", function(e) {
        e.preventDefault();

        const email = loginForm.querySelector("input[type='email']").value;
        const password = loginForm.querySelector("input[type='password']").value;

        const usuarioGuardado = JSON.parse(localStorage.getItem("usuarioRegistrado"));

        if (!usuarioGuardado) {
            alert("No hay usuarios registrados");
            return;
        }

        if (email === usuarioGuardado.email && password === usuarioGuardado.password) {

            // Guardar nombre para el saludo
            localStorage.setItem("usuario", usuarioGuardado.nombre);

            alert("Inicio de sesión exitoso");
            window.location.href = "estado.html";

        } else {
            alert("Correo o contraseña incorrectos");
        }
    });
}

// SALUDO
const saludo = document.getElementById("saludo");

if (saludo) {
    const usuario = localStorage.getItem("usuario");

    if (usuario) {
        saludo.textContent = "Hola, " + usuario + " !!";
    }
}