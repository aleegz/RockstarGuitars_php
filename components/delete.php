<?php
include '../services/connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header('Location: products.php');
} else {
    echo "Error: " . $conn->error;
}
?>
