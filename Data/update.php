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
                    $bid = $_POST['Bid'];
                    $bname = $_POST['BName'];
                    $aid = $_POST['Aid'];
                    $price = $_POST['Price'];
                    $category = $_POST['Category'];
                    $query = "UPDATE `book` SET `BName`= '$bname',`Aid`= $aid,`Price`= '$price',`Category`= '$category' WHERE Bid = $bid";    
                break;
                case 2:
                    $bid = $_POST['Bid'];
                    $query = "UPDATE `author` SET `AName`=$aname,`Bid`=$bid WHERE  Aid = $aid;";    
                    break;
                case 3:
                    $query = "Select * from members where Mid = $id";    
                break;
            }
            //getting data
            $run_sql = mysqli_query($con,$query) or die(mysqli_error($con));
        }
    }
?>