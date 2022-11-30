<?php

print_r($_POST);

if(!isset($_POST['id'])){
    header('Location: ../supplies/crockery.php?message=error');
    exit();
}

include '../models/connection.php';

$type = $_POST['inputCrockeryType'];
$material = $_POST['inputCrockeryMaterial'];
$quantity = $_POST['inputCrockeryQuantity'];
$id = $_POST['id'];

echo $type,$material,$quantity;

$stmt = $db->prepare('UPDATE crockery SET type=?,material=?,quantity=? WHERE id = ?');
$result = $stmt->execute([$type,$material,$quantity,$id]);

if($result){
    header('Location: ../supplies/crockery.php?message=updated');
} else {
    header('Location: ../supplies/crockery.php?message=error');
}

?>