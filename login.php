<?php
session_start();
include './services/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para obtener el usuario registrado con el nombre de usuario ingresado
    $sql = "SELECT * FROM users WHERE username='$username'";
    $resultado = $conn->query($sql);

    // Verificar si el usuario existe
    if ($resultado->num_rows > 0) {
        $user = $resultado->fetch_assoc();

        // Verificar si la contraseña es correcta
        if ($password === $user['psw']) {
            // Iniciar sesión y redirigir al dashboard
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: dashboard.php');
            exit();
        } else {
            $error = "Contraseña incorrecta.";
        }
    } else {
        $error = "El usuario no existe.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>

<body>
    <h2>Iniciar sesión</h2>

    <?php if (isset($error)) {
        echo "<p style='color: red;'>$error</p>";
    } ?>

    <form method="post">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Iniciar sesión">
    </form>

</body>

</html>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    h2 {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 1.5rem;
    }

    form {
        display: flex;
        flex-direction: column;
        width: 100%;
        align-items: center;
    }

    label {
        margin-bottom: 1em;
    }

    input[type="text"],
    input[type="password"] {
        width: 85%;
        padding: 1rem;
        margin-bottom: 1.5rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
    }

    input[type="submit"] {
        width: 85%;
        padding: 1rem;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 1.2rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* Estilo del mensaje de error */
    p {
        color: red;
        text-align: center;
        font-weight: bold;
    }

    a {
        text-decoration: none;
        color: #007bff;
        font-size: 1rem;
        display: block;
        text-align: center;
        margin-top: 1rem;
    }

    a:hover {
        color: #0056b3;
    }
</style>

<!-- <script>
    // Obtener el formulario
    const form = document.querySelector("form");

    // Escuchar el evento 'submit' del formulario
    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevenir el envío del formulario para ver el valor

        // Obtener el valor de la contraseña
        const password = document.getElementById("password").value;

        // Mostrar la contraseña en la consola
        console.log("Contraseña ingresada:", password);
    });
</script> -->