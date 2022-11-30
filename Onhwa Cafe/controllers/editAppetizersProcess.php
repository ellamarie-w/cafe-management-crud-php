<?php

print_r($_POST);

if(!isset($_POST['id'])){
    header('Location: ../menu/appetizers.php?message=error');
    exit();
}

include '../models/connection.php';

$name = $_POST['inputAppetizersName'];
$ingredients = $_POST['inputAppetizersIngredients'];
$price = $_POST['inputAppetizersPrice'];
$id = $_POST['id'];

echo $name,$ingredients,$price;

$stmt = $db->prepare('UPDATE appetizers SET name=?,ingredients=?,price=? WHERE id = ?');
$result = $stmt->execute([$name,$ingredients,$price,$id]);

if($result){
    header('Location: ../menu/appetizers.php?message=updated');
} else {
    header('Location: ../menu/appetizers.php?message=error');
}

?>