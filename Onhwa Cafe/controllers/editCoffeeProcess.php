<?php

print_r($_POST);

if(!isset($_POST['id'])){
    header('Location: ../supplies/coffee.php?message=error');
    exit();
}

include '../models/connection.php';

$brand = $_POST['inputCoffeeBrand'];
$type = $_POST['inputCoffeeType'];
$roast = $_POST['inputCoffeeRoast'];
$quantity = $_POST['inputCoffeeQuantity'];
$price = $_POST['inputCoffeePrice'];
$id = $_POST['id'];

echo $brand,$type,$roast,$quantity,$price;

$stmt = $db->prepare('UPDATE coffee SET brand=?,type=?,roast=?,quantity=?,price=? WHERE id = ?');
$result = $stmt->execute([$brand,$type,$roast,$quantity,$price,$id]);

if($result){
    header('Location: ../supplies/coffee.php?message=updated');
} else {
    header('Location: ../supplies/coffee.php?message=error');
}

?>