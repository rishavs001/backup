




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
            <center>ORDER CONFIRMED</center><br><br>
  


<?php
session_start();

//connect to database
require 'connection.php';
if(isset($_SESSION['email']))
  {

  
     //  echo "abc";
       echo "<div>".$_SESSION['fname']."</div>";
        echo "<div>".$_SESSION['address']."</div>";
        echo "<div>".$_SESSION['mb']."</div>";
        echo "<div>".$_SESSION['email']."</div>";
       // $_SESSION['message']= "YOU ARE NOW LOGGED IN";
     /*   echo $_SESSION['fname'];
        $_SESSION['address']=$_POST['address'];
        $_SESSION['mb']=$_POST['mb'];
     //  header("location: home.php");  //back to home page 
   //    alert("DETAILS ENTERED");
        mysql_close($db);*/
      }  
 ?>







 

  </h3>
</body>
</html>