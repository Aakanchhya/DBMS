<?php session_start(); 

    if(isset($_SESSION['name']))
    {
        require'../PHP/connect.inc.php';
        
        
        //......For Displaying Book Table......//
        if(isset($_GET['book']))
        {
            if($_GET['book'] == 1)
            {
                include('Nav.php');
                echo "
                <!DOCTYPE html>

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
                                <th colspan='2'> Actions </th>
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
                                                                
                                    echo "<td >
                                
                                    <a href='edit.php?id=".$row["Bid"]."&table=1 'role='button' class='btn btn-info'> Edit  </a>
                                    <a href='delete.php?id=".$row["Bid"]."table=1 'role='button' class='btn btn-danger'> Delete  </a>
                                    
                                </div>
                                </td>";
                                        echo "</tr>";
                                    }
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
        
        
        //..........For Displaying Author Table....//
        
        else if(isset($_GET['author']))
        {
            if($_GET['author'] == 1)
            {
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
                    <caption> Author Table </caption>
                        <thead>
                            <tr>
                                <th>Author ID</th>
                                <th>Name</th>
                                <th>Book ID</th>
                            </tr>
                        </thead>
                        <tbody>";
               
                            $sel_sql = 'SELECT * FROM author where 1';
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
                                        
                                        echo "<td >
                                
                                    <a href='edit.php?id=".$row["Aid"]."table=2 'role='button' class='btn btn-info'> Edit  </a>
                                    <a href='delete.php?id=".$row["Aid"]."table=2 'role='button' class='btn btn-danger'> Delete  </a>
                                    
                                        </div>
                                        </td>";
                                        
                                        echo "</tr>";
                                    }
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
        
        
        
        //........Displaying Members table....//
        else if(isset($_GET['member']))
        {
            if($_GET['member'] == 1)
            {
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
                    <caption> Member Table </caption>
                        <thead>
                            <tr>
                                <th>Members ID</th>
                                <th>Name</th>
                                <th>Book ID</th>
                                <th>Address</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>";
               
                            $sel_sql = 'SELECT * FROM members where 1';
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
                                        
                                        echo "<td >
                                
                                    <a href='edit.php?id=".$row["Mid"]."table=3 'role='button' class='btn btn-info'> Edit  </a>
                                    <a href='delete.php?id=".$row["Mid"]."table=3 'role='button' class='btn btn-danger'> Delete  </a>
                                    
                                    </div>
                                    </td>";

                                        echo "</tr>";
                                    }
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
    else
    {
         header('location:../index.php');
    }

?>

