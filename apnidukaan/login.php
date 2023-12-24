<!DOCTYPE html>
<html>
<head>
    <title>APNI DUKAAN LOGIN</title>
        <link rel="stylesheet type="text/css" href="mystyle.css">
        <link rel = "icon" href =  "ad.jpg" type = "image/x-icon">
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
        APNI DUKAAN 
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


            <center>LOGIN</center><br><br>

        <form name="loginform" method="POST" action="login.PHP">
            <table align="center" >
                <tr>
                    <td>EMAIL:</td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                    <td>PASSWORD:</td>
                    <td><input type="password" name="password" required></td>
                <tr>
                    <td></td>
                    <td><a href="login.php" ><input id=button1 type="submit" name="login_btn" value ="LOGIN"></a></td>
                </tr>
            </table>
        </form>

<?php
session_start();

//connect to database
require 'connection.php';
if (isset($_POST['login_btn']))
{
   
  //  $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
 //   $password2=$_POST['password2'];
  
    
    //   $password=md5($password);
        $q="SELECT * FROM users WHERE email='$email'";
        $result=mysqli_query($db,$q);
        while ($row= mysqli_fetch_assoc($result)) {
            $pswdb=$row['password'];
             $namedb=$row['name'];
        }
        if ($pswdb==$password) {
         //   echo "abc";
            $_SESSION['email']=$email;
            $_SESSION['name']=$namedb;
            header("location: home.php"); 
        }
        
    /*    $_SESSION['message']= "YOU ARE NOW LOGGED IN";
        $_SESSION['username']=$_POST['username'];
        header("location: home.php");  //back to home page 
        mysql_close($db);*/

 else
    {
       // header("location: home2.php");
        $_SESSION['message']="INCORRECT USERNAME/PASSWORD";
        $a=$_SESSION['message'];
        echo "<div>".$_SESSION['message']."</div>";
    }
}
 ?>

  </h3>
</body>
</html>