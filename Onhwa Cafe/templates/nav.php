<?php include('../controllers/noSessionControl.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Onwha Cafe - Internal System</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<!-- N A V B A R -->
<nav class="navbar bg-light bg-gradient shadow-sm p-1 mb-3 sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">
      <img src="../images/logo.png" alt="Onhwa Cafe" height="45">
    </a>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link link-dark" aria-current="page" href="../index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link link-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" aria-expanded="false">Supplies</a>
        <ul class="dropdown-menu">
          <li><a href="../supplies/coffee.php" class="dropdown-item link-dark">Coffee</a></li>
          <li><a href="../supplies/ingredients.php" class="dropdown-item link-dark">Ingredients</a></li>
          <li><a href="../supplies/crockery.php" class="dropdown-item link-dark">Crockery</a></li>
          <li><a href="../supplies/machines.php" class="dropdown-item link-dark">Machines</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link link-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" aria-expanded="false">Menu</a>
        <ul class="dropdown-menu">
          <li><a href="../menu/coldDrinks.php" class="dropdown-item link-dark">Cold Drinks</a></li>
          <li><a href="../menu/hotDrinks.php" class="dropdown-item link-dark">Hot Drinks</a></li>
          <li><a href="../menu/appetizers.php" class="dropdown-item link-dark">Appetizers</a></li>
          <li><a href="../menu/desserts.php" class="dropdown-item link-dark">Desserts</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link link-dark" href="../store/coffeeStock.php">Coffee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-dark" href="../store/employees.php">Employees</a>
      </li>
    </ul>

    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link link-dark" aria-current="page" href="#">Welcome, <?php echo $_SESSION['username']; ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-secondary" href="../logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>