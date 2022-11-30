<?php

if(empty($_POST['inputColdDrinksName']) || empty($_POST['inputColdDrinksIngredients']) || empty($_POST['inputColdDrinksPrice'])){
    header('Location: ../menu/addColdDrinks.php?message=needInfo');
    exit();
}

include '../models/connection.php';

$name = $_POST['inputColdDrinksName'];
$ingredients = $_POST['inputColdDrinksIngredients'];
$price = $_POST['inputColdDrinksPrice'];

echo $name,$ingredients,$price;

$stmt = $db->prepare("INSERT INTO cold_drinks(name,ingredients,price) VALUES(?,?,?);");
$result = $stmt->execute([$name,$ingredients,$price]);

if($result){
    header('Location: ../menu/coldDrinks.php?message=success');
} else {
    header('Location: ../menu/coldDrinks.php?message=error');
}

?>