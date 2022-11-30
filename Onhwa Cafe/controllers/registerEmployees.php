<?php

if(empty($_POST['inputEmployeeName']) || empty($_POST['inputEmployeeStore']) || empty($_POST['inputEmployeeShift'])){
    header('Location: ../store/addEmployee.php?message=needInfo');
    exit();
}

include '../models/connection.php';

$name = $_POST['inputEmployeeName'];
$store = $_POST['inputEmployeeStore'];
$shift = $_POST['inputEmployeeShift'];

echo $name,$store,$shift;

$stmt = $db->prepare("INSERT INTO employees(name,store,shift) VALUES(?,?,?);");
$result = $stmt->execute([$name,$store,$shift]);

if($result){
    header('Location: ../store/employees.php?message=success');
} else {
    header('Location: ../store/employees.php?message=error');
}

?>