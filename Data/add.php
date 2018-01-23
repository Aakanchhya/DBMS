<?php session_start();

    if(isset($_SESSION['name']))
    {
        require '../PHP/connect.inc.php';
        
                if(isset($_GET['table']))
        {
            //table name
            $table = $_GET['table'];
                    
            //choosing table
            switch($table) 
            {
                case  1:
                    $row = array("BName","Aid","Price","Category");    
                    break;
                case 2:
                    $row = array("AName","Bid");    
                    break;
                case 3:
                    $row = array("Name","Bid","Address","Date");    
                    break;
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
        <a href='display.php?table=<?php echo $table ?>' role='button' class='btn btn-primary'>
            <span class='glyphicon glyphicon-chevron-left'></span>
        </a>
    </div>
    <div class='container'>
        <div class='wrapper'>
            <form method='get' action='insert.php?table=<?php echo $table ?>'>
                <table class='table table-bordered table-hover table-responsive'>
                    
                    <thead>
                        <tr>
                            <!-- Loading table head -->
                            <?PHP 
    
                                foreach($row as $value) 
                                {
                                    echo "<th>".$value."</th>";
                                }
                                
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                        <!-- Loading table content -->
                        <?PHP 
                            
                            $count = 0;
                            foreach ($row as $value) 
                            {
                                echo "<td> <input class='form-control' name='".$value."'  /></td>";
                            }
                                        
                                                           
                           ?>
                        </tr>
                    </tbody>
                </table>
                <input name='table' value='<?php echo $table?>' hidden/>
                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
    </div>
</body>

</html>