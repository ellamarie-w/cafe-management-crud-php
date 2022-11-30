<?php

print_r($_POST);

if(!isset($_POST['id'])){
    header('Location: ../store/coffeeStock.php?message=error');
    exit();
}

include '../models/connection.php';

$brand = $_POST['inputCoffeeStockBrand'];
$type = $_POST['inputCoffeeStockType'];
$roast = $_POST['inputCoffeeStockRoast'];
$quantity = $_POST['inputCoffeeStockQuantity'];
$price = $_POST['inputCoffeeStockPrice'];
$id = $_POST['id'];

echo $brand,$type,$roast,$quantity,$price;

$stmt = $db->prepare('UPDATE coffee_stock SET brand=?,type=?,roast=?,quantity=?,price=? WHERE id = ?');
$result = $stmt->execute([$brand,$type,$roast,$quantity,$price,$id]);

if($result){
    header('Location: ../store/coffeeStock.php?message=updated');
} else {
    header('Location: ../store/coffeeStock.php?message=error');
}

?>