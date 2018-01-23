<?php session_start(); 

    if(isset($_SESSION['name']))
    {
        require'../PHP/connect.inc.php';
        
        
        //......For Displaying Book Table......//
        if($_GET['book'])
        {
            if($_GET['book'] == 1)
            {
                include('Nav.php');
                echo "<!DOCTYPE html>

                <head>
                    <title> Home </title>
                    <link rel='import' href='../bootstrap.html'>
                    <link rel='stylesheet' href='../CSS/style.css'>
                </head>

                <html>

                    <?php include('Nav.php'); ?>
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

                            if($run_sql) {
                                if(mysqli_num_rows($run_sql) != false) {
                                    while($row = mysqli_fetch_assoc($run_sql)) {
                                        echo "<tr>";
                                        foreach($row as $val) {
                                            echo "<td>".$val."</td>";
                                        }
                                        echo "</tr>";
                                    }
                                }
                            } else {
                                echo "error";
                            }

            echo "</tbody>
        </table>
    </div>

                </html>";
            }
        }
        
        
        //..........For Displaying Author Table....//
        
        else if($_GET['author'])
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

                <html>

                    <?php include('Nav.php'); ?>
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

                            if($run_sql) {
                                if(mysqli_num_rows($run_sql) != false) {
                                    while($row = mysqli_fetch_assoc($run_sql)) {
                                        echo "<tr>";
                                        foreach($row as $val) {
                                            echo "<td>".$val."</td>";
                                        }
                                        echo "</tr>";
                                    }
                                }
                            } else {
                                echo "error";
                            }

            echo "</tbody>
        </table>
    </div>

                </html>";
            }
        }
    }
    else
    {
         header('location:../index.php');
    }

?>

