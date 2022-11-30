<?php

print_r($_POST);

if(!isset($_POST['id'])){
    header('Location: ../menu/hotDrinks.php?message=error');
    exit();
}

include '../models/connection.php';

$name = $_POST['inputHotDrinksName'];
$ingredients = $_POST['inputHotDrinksIngredients'];
$price = $_POST['inputHotDrinksPrice'];
$id = $_POST['id'];

echo $name,$ingredients,$price;

$stmt = $db->prepare('UPDATE hot_drinks SET name=?,ingredients=?,price=? WHERE id = ?');
$result = $stmt->execute([$name,$ingredients,$price,$id]);

if($result){
    header('Location: ../menu/hotDrinks.php?message=updated');
} else {
    header('Location: ../menu/hotDrinks.php?message=error');
}

?>