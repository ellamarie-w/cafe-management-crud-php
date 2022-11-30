<?php

if(!isset($_GET['id'])){
    header('Location: ../store/employees.php?message=error');
    exit();
}

include '../models/connection.php';
$id = $_GET['id'];

$stmt = $db->prepare('DELETE FROM employees WHERE id = ?;');
$result = $stmt->execute([$id]);

if($result) {
    header('Location: ../store/employees.php?message=deleted');
} else {
    header('Location: ../store/employees.php?message=error');
}

?>