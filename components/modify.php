<?php
include '../services/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $image = $_POST['image'];

    $sql = "UPDATE products SET name='$name', description='$description', price='$price', stock='$stock', image='$image' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header('Location: products.php');
    } else {
        echo "Error: " . $conn->error;
    }
}

// Obtener el producto a modificar
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";
$resultado = $conn->query($sql);
$product = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Rockstar Guitars | Modificar Producto</title>
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

        a {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
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

        i {
            margin-right: .5em;
        }

        h1 {
            margin: 1em 0;
            font-size: 2em;
        }

        .container {
            width: 70%;
            margin: 20px auto;
            background: #fff;
            padding: 2em;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: sans-serif;
        }

        textarea {
            resize: vertical;
            height: 3.5em;
        }

        input[type="submit"] {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            display: block;
            margin: 0 auto;
        }

        input[type="submit"]:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <header>
        <a href="./products.php"><i class='bx bx-arrow-back'></i>Volver</a>
        <h1>Gestión de Productos</h1>
    </header>
    <div class="container">
        <h1>Modificar Producto</h1>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
            <label>Nombre:</label>
            <input type="text" name="name" value="<?php echo $product['name']; ?>" required><br>
            <label>Descripción:</label>
            <textarea name="description"><?php echo $product['description']; ?></textarea><br>
            <label>Precio:</label>
            <input type="text" name="price" value="<?php echo $product['price']; ?>" required><br>
            <label>Cantidad de stock:</label>
            <input type="number" name="stock" value="<?php echo $product['stock']; ?>" required><br>

            <!-- Campo para URL de la imagen -->
            <label>URL Imagen:</label>
            <input type="text" name="image" value="<?php echo $product['image']; ?>"><br>

            <input type="submit" value="Modificar">
        </form>
    </div>
</body>

</html>