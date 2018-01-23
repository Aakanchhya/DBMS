<?php

    require'connect.inc.php';

    $email = $_GET['email'];
    $name = $_GET['name'];
    $pass = $_GET['passw'];
    
    $sql = "Insert into login (`E-mail`,username,password) values('$email','$name','$pass')";
    
    $result = mysqli_query($con,$sql);

    if($result)
    {
        header('location:../login.php');
    }

?>