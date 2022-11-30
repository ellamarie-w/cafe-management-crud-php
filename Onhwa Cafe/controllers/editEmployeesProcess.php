<?php

print_r($_POST);

if(!isset($_POST['id'])){
    header('Location: ../store/employees.php?message=error');
    exit();
}

include '../models/connection.php';

$name = $_POST['inputEmployeeName'];
$store = $_POST['inputEmployeeStore'];
$shift = $_POST['inputEmployeeShift'];
$id = $_POST['id'];

echo $name,$store,$shift;

$stmt = $db->prepare('UPDATE employees SET name=?,store=?,shift=? WHERE id = ?');
$result = $stmt->execute([$name,$store,$shift,$id]);

if($result){
    header('Location: ../store/employees.php?message=updated');
} else {
    header('Location: ../store/employees.php?message=error');
}

?>