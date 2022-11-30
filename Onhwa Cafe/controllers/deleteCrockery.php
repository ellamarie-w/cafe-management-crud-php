<?php

if(!isset($_GET['id'])){
    header('Location: ../supplies/crockery.php?message=error');
    exit();
}

include '../models/connection.php';
$id = $_GET['id'];

$stmt = $db->prepare('DELETE FROM crockery WHERE id = ?;');
$result = $stmt->execute([$id]);

if($result) {
    header('Location: ../supplies/crockery.php?message=deleted');
} else {
    header('Location: ../supplies/crockery.php?message=error');
}

?>