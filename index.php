<?php session_start();
    if(isset($_SESSION['name']))
    {
        header('location:Data/table.php');
    }
?>

<!DOCTYPE html>
<html>
<head> 
<title> My Page </title>
    
    <link rel="import" href="bootstrap.html">
          
</head>
<body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
      <div class="navbar-header"> 
      <a class="navbar-brand" href="#"> My Webpage </a>
          <button type="button" class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#myNavbar">
                
            </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
        <li> <a href="index.php"> <span class="glyphicon glyphicon-home"> </span> </a> </li>
        <li> <a href="#"> Books </a> </li>
        <li> <a href="#"> Gallery </a> </li>
        <li> <a href="#"> About </a> </li>
        <li> <a href="#"> Contact </a> </li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
      <li > <a href="register.php"> <span class="glyphicon glyphicon-user"> </span>  Sign Up  </a> </li>
          <li> <a href="login.php"> <span class="glyphicon glyphicon-log-in"> </span> Log in </a> </li>
      </ul>
  </div>
        </div>
</nav> 
</body>
</html>