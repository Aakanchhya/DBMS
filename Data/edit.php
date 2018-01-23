<?php session_start();

    if(isset($_SESSION['name']))
    {
        require '../PHP/connect.inc.php';
        
        if(isset($_GET['id'],$_GET['table']))
        {
            //table name
            $table = $_GET['table'];
            //id
            $id = $_GET["id"];
            //choosing table
            switch($table) {
                case  1:
                    $query = "Select * from book where Bid = $id";    
                break;
                case 2:
                    $query = "Select * from author where Aid = $id";    
                    break;
                case 3:
                    $query = "Select * from members where Mid = $id";    
                break;
            }
            //getting data
            $run_sql = mysqli_query($con,$query) or die(mysqli_error($con));
            //checking if there is data
            if(mysqli_num_rows($run_sql) ) {
                $row = mysqli_fetch_assoc($run_sql);
            }                   
        }
    }

?>

<!DOCTYPE html>
<html>

<head>
    <title> Home </title>
    <link rel='import' href='../bootstrap.html'>
    <link rel='stylesheet' href='../CSS/style.css'>
</head>

<body>
    <?PHP include('Nav.php');?>
    <!-- Buttons -->
    <div class='button'>
        <a href='table.php' role='button' class='btn btn-primary'>
            <span class='glyphicon glyphicon-chevron-left'></span>
        </a>
    </div>
    <div class='container'>
        <div class='wrapper'>
            <form>
                <table class='table table-bordered table-hover table-responsive'>
                    <caption> Book Table </caption>
                    <thead>
                        <tr>
                            <!-- Loading table head -->
                            <?PHP 
                               
                                foreach ($row as $key => $value) {
                                    echo "<td>".$key."</td>";
                                }
                                
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <!-- Loading table content -->
                        <?PHP 
                            foreach ($row as $key => $value) {
                                echo "<td> <input class='form-control' value='".$value."'/></td>";
                            }
                               
                           ?>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</body>

</html>