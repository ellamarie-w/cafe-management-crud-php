<?php
session_start();
include '../models/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $db->prepare('SELECT * FROM userlogin WHERE username = ? AND userPassword = ?;');
$stmt->execute([$username,$password]);
$result = $stmt->fetch(PDO::FETCH_OBJ);

if(isset($_POST['loginbtn'])){
    if(empty($username) || empty($password)){
        header('Location: ../login.php?error=inputEmpty');
        exit();
    } else if($result === FALSE) {
        header('Location: ../login.php?error=loginFailed');
        exit();
    } else if($stmt->rowCount() == 1){
        $_SESSION['username'] = $result->username;
        header('Location: ../index.php');
        exit();
    }
}

?>