<?php
session_start();
if (isset($_SESSION['username'])) {
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Onhwa Cafe</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body bg-light>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-8 md-4 mb-4">
      <div class="card my-5">
        <div class="row">
          <div class="col">
          <img src="images/berrydesserts.jpg" class="card-img-top" alt="...">
          </div>
          <div class="col">
            <div class="card-body">
              <h3 class="card-text text-center">Log in</h3>
              <p class="text-center">Login with your Onhwa Cafe's credentials.</p>
              <!-- ALERTS -->
              <?php
              if(isset($_GET['error']) and $_GET['error'] == 'firstLogin'){
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Please log in to access the platform.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php
              }
              ?>

              <?php
              if(isset($_GET['error']) and $_GET['error'] == 'inputEmpty'){
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                All fields required.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php
              }
              ?>

              <?php
              if(isset($_GET['error']) and $_GET['error'] == 'loginFailed'){
              ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Your username or password is incorrect.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php
              }
              ?>
              
              <!-- END ALERTS -->
              <form action="controllers/loginProcess.php" method="POST">
                <div class="mb-3">
                  <label class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Enter your username">
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Enter your password">
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn btn-primary" name="loginbtn" value="login">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>


  <!-- JAVASCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>