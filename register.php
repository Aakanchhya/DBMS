<?php session_start();
    if(isset($_SESSION['name']))
    {
        header('location:Data/table.php');
    }
?>

<html>
<head>
<title> Login Page </title>
    <link rel="import" href="bootstrap.html">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    
    <div class="container"> <!-- Wrapping in a same class -->
    
        <div class="wrapper  col-md-5">
            
        <div class="panel">
            <div class="panel-heading"> Register </div>
            <div class="panel-body">
            <form class="form-group" action="PHP/create_user.php" method="get">
            
                <div class="form-group"> 
                <input type="text" class="form-control" name="email" placeholder="Enter your E-mail" required>
                </div>
                
                <div class="form-group"> 
                <input type="text" class="form-control" name="name" placeholder="Enter your Username" required>
                </div>
                
                <div class="form-group">
                <input type="password" class="form-control" name="passw" placeholder="Enter your Password" required>
                </div>
                
                <div class="form-group">
                <input type="password" class="form-control" name="passw" placeholder="Confirm your Password" required>
                </div>
                
                <div class="form-check">
                <label for="check"> <input type="checkbox" value="Check"> Remember me </label>
                </div>
        
                <div class="buttons">
                <button type="submit" value="Submit" class="btn btn-primary"> Register </button>       
                </div>
                
            </form>
            </div>
        </div>
            
        </div>
    </div>
    
</body>
</html>