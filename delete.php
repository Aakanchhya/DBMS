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
                    $query = "Delete from book where Bid = $id";    
                break;
                case 2:
                    $query = "Delete from author where Aid = $id";    
                    break;
                case 3:
                    $query = "Delete from members where Mid = $id";    
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