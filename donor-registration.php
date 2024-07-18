<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Donor Registration</title>
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
             <center><h2>Donor Registration</h2></center>
             <center><div id="form">
                <form action="" method="post">
                    
                <table>
                    <tr>
                        <td width="200px" height="50px">Enter Name</td>
                        <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
                        <td width="200px" height="50px">Enter Father's Name</td>
                        <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father's Name"></td>
                    </tr>

                    <tr>
                        <td width="200px" height="50px">Enter Address</td>
                        <td width="200px" height="50px"><textarea name="address"></textarea></td>
                        <td width="200px" height="50px">Enter City</td>
                        <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"></td>

                    </tr>

                     <tr>
                        <td width="200px" height="50px">Enter Age</td>
                        <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td>
                        <td width="200px" height="50px">Select Blood Group</td>
                        <td width="200px" height="50px">
                            <select name="bgroup">
                                <option>O+</option>
                                <option>O-</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px">Enter E-Mail</td>
                        <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-Mail"></td>
                        <td width="200px" height="50px">Enter Mobile no</td>
                        <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile no"></td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="sub" value ="Save"></td>
                    </tr>
                </table>
                </form>
                 <?php
                if(isset($_POST['sub']))
                    {
                        $name=$_POST['name'];
                        $fname=$_POST['fname'];
                       $address=$_POST['address'];
                        $city=$_POST['city'];
                        $age=$_POST['age'];
                       $bgroup=$_POST['bgroup'];
                        $mno=$_POST['mno'];
                        $email=$_POST['email'];
                        $q=$db->prepare("INSERT INTO donor_registration (name,fname,address,city,age,bgroup,mno,email) VALUES 
                            (:name,:fname,:address,:city,:age,:bgroup,:mno,:email)");
                        $q->bindValue('name',$name);
                        $q->bindValue('fname',$fname);
                        $q->bindValue('address',$address);
                        $q->bindValue('city',$city);
                        $q->bindValue('age',$age);
                        $q->bindValue('bgroup',$bgroup);
                        $q->bindValue('mno',$mno);
                        $q->bindValue('email',$email);

                        if($q->execute())
                        {
                            echo "<script>alert('Donor Registration Successfull')</script>";
                        }
                    
                    else
                    {
                        echo "<script>alert('Donor Registration Failed')</script>";
                    }
                }
                ?>
             </div></center>
        </div>
        <div id="footer"><h4 align="center">by Himanshi</h4>
        <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
    </div>
</div>
</div>
</body>
</html>
