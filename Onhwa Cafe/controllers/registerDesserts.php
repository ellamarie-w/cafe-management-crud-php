<?php

if(empty($_POST['inputDessertsName']) || empty($_POST['inputDessertsIngredients']) || empty($_POST['inputDessertsPrice'])){
    header('Location: ../menu/addDesserts.php?message=needInfo');
    exit();
}

include '../models/connection.php';

$name = $_POST['inputDessertsName'];
$ingredients = $_POST['inputDessertsIngredients'];
$price = $_POST['inputDessertsPrice'];

echo $name,$ingredients,$price;

$stmt = $db->prepare("INSERT INTO desserts(name,ingredients,price) VALUES(?,?,?);");
$result = $stmt->execute([$name,$ingredients,$price]);

if($result){
    header('Location: ../menu/desserts.php?message=success');
} else {
    header('Location: ../menu/desserts.php?message=error');
}

?>