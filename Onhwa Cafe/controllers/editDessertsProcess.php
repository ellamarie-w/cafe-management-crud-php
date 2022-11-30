<?php

print_r($_POST);

if(!isset($_POST['id'])){
    header('Location: ../menu/desserts.php?message=error');
    exit();
}

include '../models/connection.php';

$name = $_POST['inputDessertsName'];
$ingredients = $_POST['inputDessertsIngredients'];
$price = $_POST['inputDessertsPrice'];
$id = $_POST['id'];

echo $name,$ingredients,$price;

$stmt = $db->prepare('UPDATE desserts SET name=?,ingredients=?,price=? WHERE id = ?');
$result = $stmt->execute([$name,$ingredients,$price,$id]);

if($result){
    header('Location: ../menu/desserts.php?message=updated');
} else {
    header('Location: ../menu/desserts.php?message=error');
}

?>