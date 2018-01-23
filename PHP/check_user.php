<?php session_start();

    include 'connect.inc.php';
    
    echo "Inside Check user";
    
    if(isset($_GET['uname'],$_GET['pass']))
    {
        $name = $_GET['uname'];
        $password = $_GET['pass'];
        
        //Query
        $sql = "SELECT * from login where username = '$name' AND password = '$password'";
        
        //Execute
        $run = mysqli_query($con,$sql);
        
        if(mysqli_num_rows($run) == 1)
        {
            $_SESSION['name'] = $name;
            header('location:../Data/table.php');
        }
        else
        {
            echo "Cannot connect";
        }
    }
    
    else
    {
        echo "Completely outside";
    }
    
?>