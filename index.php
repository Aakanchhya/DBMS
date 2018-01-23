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
        
        
        
        <!-- ...... Images ..... -->
        
         <div class="container">
    
        
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
              
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="Images/1.jpg" style="width:100%;">
              </div>

              <div class="item">
                <img src="Images/2.jpg" style="width:100%;">
              </div>

              <div class="item">
                <img src="Images/3.jpg" style="width:100%;">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
 
</body>
</html>