<html>

<!-- Navigation Bar --> 
    <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header"> 
      <a class="navbar-brand" href="#"> User Panel </a>
          <button type="button" class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#myNavbar">
                
            </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
        <li> <a href="table.php"> <span class="glyphicon glyphicon-home"> </span> </a> </li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li > <a href="#"> <?php echo $_SESSION['name'] ?> </a> </li>
        <li> <a href="logout.php"> <span class="glyphicon glyphicon-log-out"> </span> Log out </a> </li>
      </ul>
    </div>
    </div>
</nav> 
    
</html> 