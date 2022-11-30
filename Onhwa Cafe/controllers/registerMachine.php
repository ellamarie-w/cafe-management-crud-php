<?php

if(empty($_POST['inputMachineType']) || empty($_POST['inputMachinePrice'])){
    header('Location: ../supplies/addMachines.php?message=needInfo');
    exit();
}

include '../models/connection.php';

$type = $_POST['inputMachineType'];
$price = $_POST['inputMachinePrice'];

echo $type,$price;

$stmt = $db->prepare("INSERT INTO machines(type,price) VALUES(?,?);");
$result = $stmt->execute([$type,$price]);

if($result){
    header('Location: ../supplies/machines.php?message=success');
} else {
    header('Location: ../supplies/machines.php?message=error');
}

?>