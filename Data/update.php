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
                    $aid = $_POST['Aid'];
                    $aname = $_POST['AName'];

                    $query = "UPDATE `author` SET `AName`= '$aname',`Bid`=$bid WHERE  Aid = $aid";    
                    break;
                case 3:
                    $name = $_POST['Name'];
                    $bid = $_POST['Bid'];
                    $address = $_POST['Address'];
                    $date = $_POST['Date'];
                    $mid = $_POST['Mid'];
                    $query = "UPDATE `members` SET `Name`='$name',`Bid`=$bid,`Address`='$address' ,`Date`='$date' WHERE Mid = $mid;";    
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