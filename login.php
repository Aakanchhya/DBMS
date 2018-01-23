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
    
               <div class='container'> 

                <div class='wrapper col-lg-5'>

                <div class='panel'>
                    <div class='panel-heading'> Log In </div>
                    <div class='panel-body'>
                    <form class='form-group' action='PHP/check_user.php' method='get'>

                        <div class='input-group'>
                        <span class='input-group-addon'> <i class='glyphicon glyphicon-user'></i> </span> 
                        <input type='text' class='form-control' name='uname' placeholder='Enter your username' required>
                    </div>

                    <div class='input-group'>
                        <span class='input-group-addon'> <i class='glyphicon glyphicon-lock'></i> </span> 
                        <input type='password' class='form-control' name='pass' placeholder='Enter your password' required>
                    </div>

                    <div class='form-check'>
                        <label for='check'> <input type='checkbox' value='Check'> Remember me </label>
                    </div>

                    <div class='buttons'>
                        <button type='submit' value='Submit' class='btn btn-primary'> Log in </button> 
                        <a href='register.php' style='float:right'> Register my account </a>       
                    </div>

                    </form>
                    </div>
                </div>

                </div>

    </div>

</body>
</html>