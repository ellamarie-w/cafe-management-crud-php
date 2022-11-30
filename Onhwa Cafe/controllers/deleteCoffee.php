<?php

if(!isset($_GET['id'])){
    header('Location: ../supplies/coffee.php?message=error');
    exit();
}

include '../models/connection.php';
$id = $_GET['id'];

$stmt = $db->prepare('DELETE FROM coffee WHERE id = ?;');
$result = $stmt->execute([$id]);

if($result) {
    header('Location: ../supplies/coffee.php?message=deleted');
} else {
    header('Location: ../supplies/coffee.php?message=error');
}

?>