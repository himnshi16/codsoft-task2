<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" type="text/css" href="css/style1.css">                                                                                            
</head>
<body>
    <div id="full">
        <div id="inner_full">
        <center><div id="header"><h1><a href="admin-home.php" style="text-decoration: none;color: white;">Drop of Hope</a></h1></div></center>
        <div id="body">
            <br>
            <?php
            $un=$_SESSION['un'];
            if(!$un)
            {
                header("Location:index.php");

            }
            ?>
             <center><h2>Welcome Admin</h2></center><br><br>
             <ul>
                <li><a href="donor-registration.php">Donor Registration</a></li>
                <li><a href="donor-list.php">Donor List</a></li>
                <li><a href="stock-blood-list.php">Stock Blood</a></li>
            </ul><br><br><br><br><br>
           <ul>
                <li><a href="out-stock-blood-list.php">Out Stock Blood List</a></li>
                <li><a href="exchange-blood-registration.php">Exchange Blood registration</a></li>
                <li><a href="exchange-blood-list.php">Exchange Blood List</a></li>
            </ul>
        </div>
        <div id="footer"><h4 align="center">by Himanshi</h4>
        <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
    </div>
</div>
</div>
</body>
</html>
