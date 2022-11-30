<?php

if(!isset($_GET['id'])){
    header('Location: ../supplies/machines.php?message=error');
    exit();
}

include '../models/connection.php';
$id = $_GET['id'];

$stmt = $db->prepare('DELETE FROM machines WHERE id = ?;');
$result = $stmt->execute([$id]);

if($result) {
    header('Location: ../supplies/machines.php?message=deleted');
} else {
    header('Location: ../supplies/machines.php?message=error');
}

?>