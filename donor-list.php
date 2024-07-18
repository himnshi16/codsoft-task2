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
             <center><h2>Donor List</h2></center>
             <center><div id="form">
                <table>
                    <tr>
                        <td><center><b><font color="black">Name</font></b></center></td>
                        <td><center><b><font color="black">Father's Name</font></b></center></td>
                        <td><center><b><font color="black">Address</font></b></center></td>
                        <td><center><b><font color="black">City</font></b></center></td>
                        <td><center><b><font color="black">Age</font></b></center></td>
                        <td><center><b><font color="black">Blood Group</font></b></center></td>
                        <td><center><b><font color="black">Mobile No</font></b></center></td>
                        <td><center><b><font color="black">E-mail</font></b></center></td>
                    </tr>
                    <?php
                    $q=$db->query("SELECT * FROM donor_registration");
                    while($r1=$q->fetch(PDO::FETCH_OBJ))
                    {
                        ?>
                    <tr>
                        <td><center><?= $r1->name; ?></center></td>
                        <td><center><?= $r1->fname; ?></center></td>
                        <td><center><?= $r1->address; ?></center></td>
                        <td><center><?= $r1->city; ?></center></td>
                        <td><center><?= $r1->age; ?></center></td>
                        <td><center><?= $r1->bgroup; ?></center></td>
                        <td><center><?= $r1->mno; ?></center></td>
                        <td><center><?= $r1->email; ?></center></td>
                    </tr>
                    <?php
                }
                ?>
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
