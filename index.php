<?php
include './services/connection.php';

$sql = "SELECT p.id, p.name, p.description, p.price, p.image FROM products p";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Rockstar Guitars | Store</title>
    <link rel="icon" href="./assets/rockstar-guitars.icon">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <?php include './views/header.php'; ?>
    <?php include './views/home.php'; ?>
    <?php include './views/about.php'; ?>
    <?php include './views/showroom.php'; ?>
    <?php include './views/footer.php'; ?>
</body>

</html>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Selecciona todos los enlaces con href de tipo #id
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault(); // Evita el comportamiento predeterminado del enlace

                // Obtiene el destino de desplazamiento (la sección con el id correspondiente)
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                // Desplaza de forma suave hacia la sección
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });
    });
</script>