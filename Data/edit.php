<?php session_start();

    if(isset($_SESSION['name']))
    {
        require '../PHP/connect.inc.php';
        
        if(isset($_GET['id'],$_GET['table']))
        {
            if($_GET['table'] == 1)
            {
                $query = 'Select * from book where Bid = $_GET["id"]';
                $run_query = mysqli_query($con,$query);
                
                include('Nav.php');
                
                echo "<!DOCTYPE html>

                <head>
                    <title> Home </title>
                    <link rel='import' href='../bootstrap.html'>
                    <link rel='stylesheet' href='../CSS/style.css'>
                </head>

                <body>
                    
                    <!-- Buttons -->
                    <div class='button'>
                        <a href='table.php' role='button' class='btn btn-primary'> <span class='glyphicon glyphicon-chevron-left'></span></a>
                    </div>
                <div class='container'>
                   <div class='wrapper'>
                    <table class='table table-bordered table-hover table-responsive'>
                    <caption> Book Table </caption>
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Book ID</th>
                                <th>Author ID</th>
                                <th>Price</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>";
               
                            $sel_sql = 'SELECT * FROM book where 1';
                            $run_sql = mysqli_query($con,$sel_sql);

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
                                                                
                                        echo "</tr>";
                                    }
                                    
                                    if($row['Bid'] == )
                                    echo "<form action='#' class='form-inline'>
                                                    <div class='form-group'>
                                                        <input type='text' placeholder=".$row['BName']."
                                                    </div>
                                                    <div class='form-group'>
                                                        <input type='text' placeholder=".$row['Aid']."
                                                    </div>
                                                    <div class='form-group'>
                                                        <input type='text' placeholder=".$row['Price']."
                                                    </div>
                                                    <div class='form-group'>
                                                        <input type='text' placeholder=".$row['Category']."
                                                    </div>
                                                </form>";
                                }
                            } 
                            else 
                            {
                                echo "error";
                            }

            echo "</tbody>
            </table>
        </div>
        
        </body>
        </html>";
            }
        }
    }

?>