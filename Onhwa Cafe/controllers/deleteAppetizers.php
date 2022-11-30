<?php

if(!isset($_GET['id'])){
    header('Location: ../menu/appetizers.php?message=error');
    exit();
}

include '../models/connection.php';
$id = $_GET['id'];

$stmt = $db->prepare('DELETE FROM appetizers WHERE id = ?;');
$result = $stmt->execute([$id]);

if($result) {
    header('Location: ../menu/appetizers.php?message=deleted');
} else {
    header('Location: ../menu/appetizers.php?message=error');
}

?>