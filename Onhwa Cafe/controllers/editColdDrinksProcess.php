<?php

print_r($_POST);

if(!isset($_POST['id'])){
    header('Location: ../menu/coldDrinks.php?message=error');
    exit();
}

include '../models/connection.php';

$name = $_POST['inputColdDrinksName'];
$ingredients = $_POST['inputColdDrinksIngredients'];
$price = $_POST['inputColdDrinksPrice'];
$id = $_POST['id'];

echo $name,$ingredients,$price;

$stmt = $db->prepare('UPDATE cold_drinks SET name=?,ingredients=?,price=? WHERE id = ?');
$result = $stmt->execute([$name,$ingredients,$price,$id]);

if($result){
    header('Location: ../menu/coldDrinks.php?message=updated');
} else {
    header('Location: ../menu/coldDrinks.php?message=error');
}

?>