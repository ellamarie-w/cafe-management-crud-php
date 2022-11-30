<?php

if(!isset($_GET['id'])){
    header('Location: ../menu/coldDrinks.php?message=error');
    exit();
}

include '../models/connection.php';
$id = $_GET['id'];

$stmt = $db->prepare('DELETE FROM cold_drinks WHERE id = ?;');
$result = $stmt->execute([$id]);

if($result) {
    header('Location: ../menu/coldDrinks.php?message=deleted');
} else {
    header('Location: ../menu/coldDrinks.php?message=error');
}

?>