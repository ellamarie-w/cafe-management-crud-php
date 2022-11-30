<?php

if(empty($_POST['inputIngredientName']) || empty($_POST['inputIngredientBrand']) || empty($_POST['inputIngredientQuantity'])){
    header('Location: ../supplies/addIngredients.php?message=needInfo');
    exit();
}

include '../models/connection.php';

$name = $_POST['inputIngredientName'];
$brand = $_POST['inputIngredientBrand'];
$quantity = $_POST['inputIngredientQuantity'];

echo $name,$brand,$quantity;

$stmt = $db->prepare("INSERT INTO ingredients(name,brand,quantity) VALUES(?,?,?);");
$result = $stmt->execute([$name,$brand,$quantity]);

if($result){
    header('Location: ../supplies/ingredients.php?message=success');
} else {
    header('Location: ../supplies/ingredients.php?message=error');
}

?>