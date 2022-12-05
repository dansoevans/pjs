<?php  
$HOSTNAME =  'localhost';
$USERNAME =  'evs_dev';
$PASSWORD =  '';
$DATABASE =  'sign-up';

$con = mysqli_connect($HOSTNAME, $USERNAME,$PASSWORD,$DATABASE);
if (!$con) {
    die(mysqli_error($con));


}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>