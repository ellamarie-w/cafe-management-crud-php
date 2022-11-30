<?php

if(empty($_POST['inputAppetizersName']) || empty($_POST['inputAppetizersIngredients']) || empty($_POST['inputAppetizersPrice'])){
    header('Location: ../menu/addAppetizers.php?message=needInfo');
    exit();
}

include '../models/connection.php';

$name = $_POST['inputAppetizersName'];
$ingredients = $_POST['inputAppetizersIngredients'];
$price = $_POST['inputAppetizersPrice'];

echo $name,$ingredients,$price;

$stmt = $db->prepare("INSERT INTO appetizers(name,ingredients,price) VALUES(?,?,?);");
$result = $stmt->execute([$name,$ingredients,$price]);

if($result){
    header('Location: ../menu/appetizers.php?message=success');
} else {
    header('Location: ../menu/appetizers.php?message=error');
}

?>