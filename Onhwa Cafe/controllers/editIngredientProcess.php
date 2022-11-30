<?php

print_r($_POST);

if(!isset($_POST['id'])){
    header('Location: ../supplies/ingredients.php?message=error');
    exit();
}

include '../models/connection.php';

$name = $_POST['inputIngredientName'];
$brand = $_POST['inputIngredientBrand'];
$quantity = $_POST['inputIngredientQuantity'];
$id = $_POST['id'];

echo $name,$brand,$quantity;

$stmt = $db->prepare('UPDATE ingredients SET name=?,brand=?,quantity=? WHERE id = ?');
$result = $stmt->execute([$name,$brand,$quantity,$id]);

if($result){
    header('Location: ../supplies/ingredients.php?message=updated');
} else {
    header('Location: ../supplies/ingredients.php?message=error');
}

?>