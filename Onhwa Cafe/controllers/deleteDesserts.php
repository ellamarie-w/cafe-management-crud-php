<?php

if(!isset($_GET['id'])){
    header('Location: ../menu/desserts.php?message=error');
    exit();
}

include '../models/connection.php';
$id = $_GET['id'];

$stmt = $db->prepare('DELETE FROM desserts WHERE id = ?;');
$result = $stmt->execute([$id]);

if($result) {
    header('Location: ../menu/desserts.php?message=deleted');
} else {
    header('Location: ../menu/desserts.php?message=error');
}

?>