<?php session_start();
    if(isset($_SESSION['name']))
    {
        require'../PHP/connect.inc.php';
    }
    else
    {
        header('location:../index.php');
    }
?>

<!DOCTYPE html>

<head>
    <title> Home </title>
    <link rel="import" href="../bootstrap.html">
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<html>
    
    <?php include('Nav.php'); ?>
    <!-- Buttons -->
    <div class="buttons">
        <a href="display.php?table=1" role="button" class="btn btn-primary"> Books <span class="glyphicon glyphicon-chevron-right"></span> </a>
    </div>
    
    <div class="buttons">
    <a href="display.php?table=2" role="button" class="btn btn-primary"> Authors <span class="glyphicon glyphicon-chevron-right"></span> </a>
    </div>
    
    <div class="buttons">
    <a href="display.php?table=3" role="button" class="btn btn-primary"> Members <span class="glyphicon glyphicon-chevron-right"></span> </a>
    </div>
    
</html>