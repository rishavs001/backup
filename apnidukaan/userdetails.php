<?php
session_start();

//connect to database
 require 'connection.php';
 if(isset($_SESSION['email']))
  {
if (isset($_POST['add_details_btn']))
{
   
   $fname=$_POST['fname'];
  // $email=$_SESSION['email'];
    $mb=$_POST['mb'];
    $address=$_POST['address'];
        $q="INSERT INTO userdetails(fname,mb,address) VALUES('$fname','$mb','$address')";
        mysqli_query($db,$q);
        
       // $_SESSION['message']= "YOU ARE NOW LOGGED IN";
        $_SESSION['fname']=$_POST['fname'];
        $_SESSION['address']=$_POST['address'];
        $_SESSION['mb']=$_POST['mb'];
       header("location: deliver.php");  //back to home page 
   //    alert("DETAILS ENTERED");
        mysql_close($db);
      }
    }
 ?>




<!DOCTYPE html>
<html>
<head>
    <title>APNI DUKAAN SIGNUP</title>
     <link rel = "icon" href =  "ad.jpg" type = "image/x-icon">
        <link rel="stylesheet type="text/css" href="mystyle.css">
        <style type="text/css">
           h5
           {
            text-align: center;
           }
            table
            {
                font-size: 30px;
                text-align: right;
                color: red;
                right: 30%;
            }
        </style>
</head>
<body>
  <h1>
    <div id=header1>
    <div  class= "headr2">
        APNI DUKAAN  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <?php
                           if(isset($_SESSION['email']))
                           {echo $_SESSION['name'];
                           ?>
                          <td><a href="logout.php" ><input  id=button1 type="button" value ="LOG OUT"></a></td>
                          
                           <?php

                           }
                           else
                           {
                            ?>
                       <a href="LnS.php"><input id="button1" type="button" value="LOGIN AND SIGNUP"  > </a></a> 
                           <?php
                           }
                           ?>
    </div>
    </div>
        <div id="header3">
        <div class="headr4">
       <h2>
            <CENTER> <a href="home.php" ><input type="button" value="HOME" onclick="home.php" > </a></CENTER>
       </h2>  
       </div>       
    </div> 
    </h1>

        <br>
        <br>
<h3>
            <center>DETAILS</center><br><br>
     <form name="RegForm" method="POST" action="userdetails.php">
        <table align="center" >
                <tr>
                    <td>NAME:</td>
                    <td><input type="txt" name="fname" size=30  required></td>
                </tr>
                <tr>
                    <td>MOBILE NO.:</td>
                    <td><input name="mb" size=30  required> </td>
                </tr>
                <tr>
                    <td>ADDRESS:</td>
                    <td> <input type="txt" name="address" size=30 required></td>
                </tr>

                 <tr>
                    <td></td>

                    <td><br><a href="lns.php"><input id="button1" type="submit" name="add_details_btn" value="REGISTER" ></a></td>
                </tr> 
            </table>
</form>
  </h3>
</body>
</html>