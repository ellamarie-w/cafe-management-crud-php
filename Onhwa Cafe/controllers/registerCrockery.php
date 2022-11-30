<?php

if(empty($_POST['inputCrockeryType']) || empty($_POST['inputCrockeryMaterial']) || empty($_POST['inputCrockeryQuantity'])){
    header('Location: ../supplies/addCrockery.php?message=needInfo');
    exit();
}

include '../models/connection.php';

$type = $_POST['inputCrockeryType'];
$material = $_POST['inputCrockeryMaterial'];
$quantity = $_POST['inputCrockeryQuantity'];

echo $type,$material,$quantity;

$stmt = $db->prepare("INSERT INTO crockery(type,material,quantity) VALUES(?,?,?);");
$result = $stmt->execute([$type,$material,$quantity]);

if($result){
    header('Location: ../supplies/crockery.php?message=success');
} else {
    header('Location: ../supplies/crockery.php?message=error');
}

?>