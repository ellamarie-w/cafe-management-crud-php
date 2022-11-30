<?php

if(empty($_POST['inputCoffeeStockBrand']) || empty($_POST['inputCoffeeStockType']) || empty($_POST['inputCoffeeStockRoast']) || empty($_POST['inputCoffeeStockQuantity']) || empty($_POST['inputCoffeeStockPrice'])){
    header('Location: ../store/addCoffeeStock.php?message=needInfo');
    exit();
}

include '../models/connection.php';

$brand = $_POST['inputCoffeeStockBrand'];
$type = $_POST['inputCoffeeStockType'];
$roast = $_POST['inputCoffeeStockRoast'];
$quantity = $_POST['inputCoffeeStockQuantity'];
$price = $_POST['inputCoffeeStockPrice'];

echo $brand,$type,$roast,$quantity,$price;

$stmt = $db->prepare("INSERT INTO coffee_stock(brand,type,roast,quantity,price) VALUES(?,?,?,?,?);");
$result = $stmt->execute([$brand,$type,$roast,$quantity,$price]);

if($result){
    header('Location: ../store/coffeeStock.php?message=success');
} else {
    header('Location: ../store/coffeeStock.php?message=error');
}

?>