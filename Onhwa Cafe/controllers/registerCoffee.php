<?php

if(empty($_POST['inputCoffeeBrand']) || empty($_POST['inputCoffeeType']) || empty($_POST['inputCoffeeRoast']) || empty($_POST['inputCoffeeQuantity']) || empty($_POST['inputCoffeePrice'])){
    header('Location: ../supplies/addCoffee.php?message=needInfo');
    exit();
}

include '../models/connection.php';

$brand = $_POST['inputCoffeeBrand'];
$type = $_POST['inputCoffeeType'];
$roast = $_POST['inputCoffeeRoast'];
$quantity = $_POST['inputCoffeeQuantity'];
$price = $_POST['inputCoffeePrice'];

echo $brand,$type,$roast,$quantity,$price;

$stmt = $db->prepare("INSERT INTO coffee(brand,type,roast,quantity,price) VALUES(?,?,?,?,?);");
$result = $stmt->execute([$brand,$type,$roast,$quantity,$price]);

if($result){
    header('Location: ../supplies/coffee.php?message=success');
} else {
    header('Location: ../supplies/coffee.php?message=error');
}

?>