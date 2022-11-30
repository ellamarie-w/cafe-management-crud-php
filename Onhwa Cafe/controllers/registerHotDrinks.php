<?php

if(empty($_POST['inputHotDrinksName']) || empty($_POST['inputHotDrinksIngredients']) || empty($_POST['inputHotDrinksPrice'])){
    header('Location: ../menu/addHotDrinks.php?message=needInfo');
    exit();
}

include '../models/connection.php';

$name = $_POST['inputHotDrinksName'];
$ingredients = $_POST['inputHotDrinksIngredients'];
$price = $_POST['inputHotDrinksPrice'];

echo $name,$ingredients,$price;

$stmt = $db->prepare("INSERT INTO hot_drinks(name,ingredients,price) VALUES(?,?,?);");
$result = $stmt->execute([$name,$ingredients,$price]);

if($result){
    header('Location: ../menu/hotDrinks.php?message=success');
} else {
    header('Location: ../menu/hotDrinks.php?message=error');
}

?>