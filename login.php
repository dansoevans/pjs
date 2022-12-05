<?php
$login = 0;
$invalid = 0;
if ($_SERVER['REQUEST_METHOD']=='POST') {
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "Select * from `registeration` where username='$username' and password ='$password'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {

            $login = 1;
            session_start();
            $_SESSION['username'] = $username;
            header('location:index.php');

        } else {
            // echo ("invalid credentials");
            $invalid = 1;
        }
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOG IN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <?php 
    if($invalid){

        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!!</strong>Invalid Credentials Bro!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        ';
    }
    
    ?>
    <?php 
    if($login){

        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Cool!</strong>Login Success!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        ';
    }
    
    ?>
    <h1 class="text-center" >Login Page</h1>
    <div class="container mt-5" >
    <form action="login.php" method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input placeholder="Enter Your Email Address" type="text" class="form-control" name="username"
>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">log In</button>
</form>
    </div>
  </body>
</html>