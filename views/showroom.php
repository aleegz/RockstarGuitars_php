<section id="guitars-section">
    <h2 class="guitars-title"><span class="guitars-title__span">Our Guitars</span></h2>
    <?php
    include './services/connection.php';

    // Realizamos la consulta para obtener todos los productos
    $sql = "SELECT id, name, description, price, image FROM products";
    $resultado = $conn->query($sql);

    // Verificamos si la consulta se ejecutó correctamente
    if ($resultado === false) {
        die("Error en la consulta: " . $conn->error);
    }
    ?>
    <div class="product-cards-container">
        <?php
        // Verificamos que haya resultados antes de intentar hacer el fetch_assoc()
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) { ?>
                <div class="product-card">
                    <div class="main-images">
                        <img src="<?php echo $fila['image']; ?>" alt="Imagen del producto">
                    </div>
                    <div class="guitar-details">
                        <div class="guitar_name"><?php echo $fila['name']; ?></div>
                        <p><?php echo $fila['description']; ?></p>
                    </div>
                    <div class="color-price">
                        <div class="price">
                            <div class="price_num">$<?php echo number_format($fila['price'], 2); ?></div>
                        </div>
                    </div>
                    <div class="button">
                        <button><i class='bx bx-cart-add'></i>Add to Cart</button>
                    </div>
                </div>
        <?php }
        } else {
            echo "<p>No products available.</p>";
        }
        ?>
    </div>
</section>

<style>
    #guitars-section {
        width: 100%;
        margin: auto;
        background-color: #f4f4f4;
    }

    .guitars-title {
        text-align: center;
        font-size: 2em;
        margin-bottom: 50px;
    }

    .product-cards-container {
        display: flex;
        flex-direction: column; /* Para mostrar las cards una debajo de otra */
        align-items: center;
    }

    .product-card {
        width: 85%; /* Ancho de la tarjeta al 85% */
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin-bottom: 30px; /* Espacio entre las tarjetas */
        transition: transform 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-10px);
    }

    .main-images img {
        width: 100%;
        height: 200px;
        object-fit: contain;
        border-radius: 8px;
    }

    .guitar-details {
        margin-top: 20px;
    }

    .guitar_name {
        font-size: 1.5em;
        font-weight: bold;
        color: #333;
    }

    .guitar-details p {
        font-size: 14px;
        color: #777;
        margin-top: 10px;
    }

    .color-price {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .price_num {
        font-size: 1.2em;
        font-weight: bold;
        color: #333;
    }

    .button {
        margin-top: 20px;
    }

    .button button {
        background-color: #28a745;
        color: #fff;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 1em;
        cursor: pointer;
    }

    .button button:hover {
        background-color: #218838;
    }

    i {
        margin-right: .5em;
    }
</style>
