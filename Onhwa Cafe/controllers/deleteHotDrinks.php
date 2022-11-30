<?php

if(!isset($_GET['id'])){
    header('Location: ../menu/hotDrinks.php?message=error');
    exit();
}

include '../models/connection.php';
$id = $_GET['id'];

$stmt = $db->prepare('DELETE FROM hot_drinks WHERE id = ?;');
$result = $stmt->execute([$id]);

if($result) {
    header('Location: ../menu/hotDrinks.php?message=deleted');
} else {
    header('Location: ../menu/hotDrinks.php?message=error');
}

?>