<?php

print_r($_POST);

if(!isset($_POST['id'])){
    header('Location: ../supplies/machines.php?message=error');
    exit();
}

include '../models/connection.php';

$type = $_POST['inputMachineType'];
$price = $_POST['inputMachinePrice'];
$id = $_POST['id'];

echo $type,$price;

$stmt = $db->prepare('UPDATE machines SET type=?,price=? WHERE id = ?');
$result = $stmt->execute([$type,$price,$id]);

if($result){
    header('Location: ../supplies/machines.php?message=updated');
} else {
    header('Location: ../supplies/machines.php?message=error');
}

?>