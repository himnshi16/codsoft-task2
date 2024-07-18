<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Donor Registration</title>
        <link rel="stylesheet" type="text/css" href="css/style1.css">
        <style type="text/css">
            td{
                width: 200px;
                height: 40px;
            }
        </style>                                                                                            
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
             <center><h2>Stock Blood List</h2></center>
             <center><div id="form">
                <table>
                    <tr>
                        <td><center><b><font color="black">Name</font></b></center></td>
                        <td><center><b><font color="black">Qty</font></b></center></td>
                       
                    </tr>
                    
                    <tr>
                        <td><center>O+</center></td>
                        <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>
                    <tr>
                        <td><center>O-</center></td>
                        <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O-'");
                            echo $row=$q->rowcount();
                            ?>
                            </center></td>
                    </tr>
                    <tr>
                        <td><center>A+</center></td>
                        <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>
                    <tr>
                       <td><center>A-</center></td>
                        <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A-'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>
                    <tr>
                       <td><center>B+</center></td>
                        <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B+'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>
                    <tr>
                       <td><center>B-</center></td>
                        <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B-'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>
                    <tr>
                       <td><center>AB+</center></td>
                        <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>
                    <tr>
                       <td><center>AB-</center></td>
                        <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>
                    
                </table>
                    
             </div></center>
        </div>
        <div id="footer"><h4 align="center">by Himanshi</h4>
        <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
    </div>
</div>
</div>
</body>
</html>
