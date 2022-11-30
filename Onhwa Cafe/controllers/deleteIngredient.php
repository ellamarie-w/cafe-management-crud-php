<?php

if(!isset($_GET['id'])){
    header('Location: ../supplies/ingredients.php?message=error');
    exit();
}

include '../models/connection.php';
$id = $_GET['id'];

$stmt = $db->prepare('DELETE FROM ingredients WHERE id = ?;');
$result = $stmt->execute([$id]);

if($result) {
    header('Location: ../supplies/ingredients.php?message=deleted');
} else {
    header('Location: ../supplies/ingredients.php?message=error');
}

?>