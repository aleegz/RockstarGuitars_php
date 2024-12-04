<?php
include '../services/connection.php';

// Realizar la consulta para obtener todos los productos
$sql = "SELECT id, name, description, price, stock, image FROM products";
$resultado = $conn->query($sql);

// Verificar si la consulta se ejecutó correctamente
if ($resultado === false) {
    die("Error en la consulta: " . $conn->error);
}
?>

<html>

<head>
    <title>Rockstar Guitars | Productos</title>
    <link rel="icon" href="../assets/rockstar-guitars.icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #000;
            color: #fff;
            padding: 20px;
            text-align: center;
        }


        i {
            margin-right: .5em;
        }

        h1 {
            margin: 1em 0;
            font-size: 2em;
        }

        a {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            /* Azul principal */
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            margin-bottom: 1.5rem;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            width: fit-content;
        }

        a:hover {
            background-color: #0056b3;
        }

        #products-section {
            padding: 2rem;
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        /* Tabla principal */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Cabecera de la tabla */
        table th {
            background-color: #007bff;
            /* Azul principal */
            color: #fff;
            text-align: left;
            padding: 1rem;
            font-size: 1rem;
            text-transform: uppercase;
            text-align: center;
        }

        /* Filas de la tabla */
        table td {
            padding: 0.8rem;
            font-size: 0.95rem;
            color: #333;
            border-bottom: 1px solid #dee2e6;
            text-align: center;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
            /* Alterna colores para mayor legibilidad */
        }

        table tr:hover {
            background-color: #e9ecef;
            /* Efecto hover en filas */
        }

        /* Imágenes de los productos */
        table img {
            display: block;
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .actions {
            display: flex;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <header>
        <a href="../dashboard.php"><i class='bx bx-arrow-back'></i>Volver</a>
        <h1>Gestión de Productos</h1>
    </header>
    <section id="products-section">
        <table>
            <tr>
                <th>Código Artículo</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
            <?php
            // Verificar que haya resultados antes de intentar hacer el fetch_assoc()
            while ($fila = $resultado->fetch_assoc()) {
                if (isset($fila['id'])) { ?>
                    <tr>
                        <td><?php echo $fila['id']; ?></td>
                        <td><?php echo $fila['name']; ?></td>
                        <td><?php echo $fila['description']; ?></td>
                        <td><?php echo $fila['price']; ?></td>
                        <td><?php echo $fila['stock']; ?></td>
                        <td><img src="<?php echo $fila['image']; ?>" alt="Imagen del producto" style="width: 100px; height: auto;"></td>
                        <td class="actions">
                            <a href="modify.php?id=<?php echo $fila['id']; ?>"><i class='bx bx-edit'></i>Modificar</a>
                            <a href="delete.php?id=<?php echo $fila['id']; ?>" onclick="return confirm('¿Estás seguro?');"><i class='bx bx-x-circle'></i>Eliminar</a>
                        </td>
                    </tr>
            <?php }
            } ?>
        </table>
        <center><a href="create.php"><i class='bx bxs-add-to-queue'></i>Crear Nuevo Producto</a></center>
    </section>

</body>

</html>