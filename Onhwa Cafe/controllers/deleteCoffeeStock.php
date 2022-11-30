<?php

if(!isset($_GET['id'])){
    header('Location: ../store/coffeeStock.php?message=error');
    exit();
}

include '../models/connection.php';
$id = $_GET['id'];

$stmt = $db->prepare('DELETE FROM coffee_stock WHERE id = ?;');
$result = $stmt->execute([$id]);

if($result) {
    header('Location: ../store/coffeeStock.php?message=deleted');
} else {
    header('Location: ../store/coffeeStock.php?message=error');
}

?>