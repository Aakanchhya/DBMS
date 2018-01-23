<?php session_start(); 

    if(isset($_SESSION['name']))
    {
        require'../PHP/connect.inc.php';
        
        
        //......For Displaying Book Table......//
        if(isset($_GET['table']))
        {
            $table = $_GET['table'];
            
            switch($table)
            {
                case 1:
                    $query = "Select * from Book";
                    $table = "Book";
                    break;
                case 2:
                    $query = "Select * from Author";
                    $table = "Author";
                    break;
                case 3:
                    $query = "Select * from Members";
                    $table = "Member";
                    break;
            }
            $run_sql = mysqli_query($con,$query);
            if(mysqli_num_rows($run_sql))
            {
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
    <a href='table.php' role='button' class='btn btn-primary'> <span class='glyphicon glyphicon-chevron-left'></span></a>
    </div>
                    
    <div class='container'>
    <div class='wrapper'>
        <table class='table table-bordered table-hover table-responsive'>
        <caption><?php echo $table ?> Table </caption>
            <thead>
                <tr>
                    <?PHP 
                               
                        foreach ($row as $key => $value) 
                        {
                            echo "<td>".$key."</td>";
                        }
                                
                    ?>
                    <td> Action </td>
                </tr>
            </thead>
            <tbody>
                    
                <?php
               
                    if($run_sql) 
                    {
                        if(mysqli_num_rows($run_sql) != false) 
                        {
                            while($row = mysqli_fetch_assoc($run_sql)) 
                            {
                                echo "<tr>";
                                foreach($row as $val) 
                                {
                                   echo "<td>".$val."</td>";
                                }
                                                                
                                echo "<td>";
                                
                                echo "<a href='edit.php?id=".$row["Bid"]."&table=1 'role='button' class='btn btn-info'> Edit  </a>";
                                echo "<a href='delete.php?id=".$row["Bid"]."table=1 'role='button' class='btn btn-danger'> Delete  </a>";
                                    
                                echo "</div>
                                </td>
                                </tr>";
                            }
                        }
                    }
                            
                ?>

        </tbody>
    </table>
        
    </div>
    </div>
    
</body>
</html>