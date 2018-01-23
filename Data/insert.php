<?php
    session_start();

    if(isset($_SESSION['name']))
    {
        require '../PHP/connect.inc.php';
        
        if(isset($_POST['table'])) {
            //table name
            $table = $_POST['table'];
            
            //choosing table
            switch($table) {
                case  1:
                    $bname = $_POST['BName'];
                    $aid = $_POST['Aid'];
                    $price = $_POST['Price'];
                    $category = $_POST['Category'];
                    $query = "INSERT into `book` VALUES($bname,$aid,$price,$category)";
                break;
                case 2:
                    $bid = $_POST['Bid'];
                    $aname = $_POST['AName'];

                    $query = "INSERT into `author` VALUES($aname,$bid)";    
                    break;
                case 3:
                    $name = $_POST['Name'];
                    $bid = $_POST['Bid'];
                    $address = $_POST['Address'];
                    $date = $_POST['Date'];
                    $query = "INSERT into `book` VALUES($name,$bid,$address,$date)";    
                break;
            }
            
            //getting data
            $run_sql = mysqli_query($con,$query) or die(mysqli_error($con));

            if($run_sql)
            {
                header('location:display.php?table='.$table);
            }
        }
    }
?>