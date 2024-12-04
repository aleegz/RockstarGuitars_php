<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['user_id'])) {
    // Si no está logueado, redirigir al login
    header('Location: login.php');
    exit();
}

include './services/connection.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockstar Guitars | Dashboard</title>
    <link rel="icon" href="./assets/rockstar-guitars.icon">
</head>

<body>
    <div class="container">
        <h2>Bienvenido, <?php echo $_SESSION['username']; ?>!</h2>

        <div class="links">
            <p><a href="./components/products.php" class="button modify-products"><i>Modificar Productos</i></a></p>
            <p><a href="logout.php" class="button logout"><i>Cerrar Sesión</i></a></p>
        </div>
    </div>
</body>

</html>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2rem;
    }

    h2 {
        font-size: 2rem;
        color: #333;
        margin-bottom: 2rem;
    }

    .links {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    p {
        margin: 1rem 0;
    }

    a.button {
        display: block;
        width: 48%;
        height: 200px;
        margin: 1rem auto;
        color: #fff;
        text-decoration: none;
        font-size: 1.5rem;
        text-align: center;
        line-height: 200px;
        border-radius: 10px;
        background-size: cover;
        background-position: center;
        transition: transform 0.3s ease;
    }

    /* Fondo para el botón "Añadir Productos" */
    a.modify-products {
        background-image: url('https://copymate.app/wp-content/uploads/2024/02/zwrot-towaru-zakupionego-w-sklepie-internetowym-porady-dla-sprzedawcow-jak-zarzadzac-zwrotami-800x694.jpg');

    }

    /* Fondo para el botón "Cerrar Sesión" */
    a.logout {
        background-image: url('https://img.freepik.com/premium-vector/hand-mouse-cursor-click-red-shut-down-close-button-sign-website-mobile-app-ui_659151-267.jpg');
    }

    /* Hover: Efecto de zoom */
    a.button:hover {
        transform: scale(1.1);
    }

    /* Ajustes de las imágenes de fondo */
    a.modify-products:hover {
        background-image: url('https://copymate.app/wp-content/uploads/2024/02/zwrot-towaru-zakupionego-w-sklepie-internetowym-porady-dla-sprzedawcow-jak-zarzadzac-zwrotami-800x694.jpg');
    }

    a.logout:hover {
        background-image: url('https://img.freepik.com/premium-vector/hand-mouse-cursor-click-red-shut-down-close-button-sign-website-mobile-app-ui_659151-267.jpg');
    }

    i {
        background: #fff;
        color: #000;
        font-weight: bolder;
    }
</style>