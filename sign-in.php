<?php
$success = 0;
$user = 0;
if ($_SERVER['REQUEST_METHOD']=='POST') {
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "Select * from `registeration` where username='$username'";
    $result = mysqli_query($con, $sql);
    if($result){
        $num = mysqli_num_rows($result);
        if($num > 0){
         
            $user =1;
        }else{
              $sql = "Insert into `registeration`(username,password) values('$username','$password')";
    $result = mysqli_query($con, $sql);
    if($result){
        
                $success = 1;
                session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
                header('location:index.html');


    }else{
        die(mysqli_error($con));
    }
        }
    }

}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <?php 
    if($user){

        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong>Try a new email Bro!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        ';
    }
    
    ?>
    <?php 
    if($success){

        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Cool!</strong>Login Success!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        ';
    }
    
    ?>
    <h1 class="text-center" >Sign-up Page</h1>
    <div class="container mt-5" >
    <form action="sign-in.php" method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input placeholder="Enter Your Email Address" type="text" class="form-control" name="username"
>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">Sign Up</button>
  <div class="p lead mt-3">Already Have an Account? <a style="text-decoration: none;"  href="login.php">Login</a></div>
</form>
    </div>
  </body>
</html>