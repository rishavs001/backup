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
            <center>SIGNUP</center><br><br>
        <form name="signupform" method="POST" action="SIGNUP.PHP">
            <table align="center" >
                <tr>
                    <td>NAME:</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>EMAIL:</td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                    <td>PASSWORD:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>CONFIRM PASSWORD:</td>
                    <td><input type="password" name="password2" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><br><a href="lns.php"><input id="button1" type="submit" name="register_btn" value ="SIGNUP"></a></td>
                </tr>
            </table>
        </form>

<?php
session_start();

//connect to database
 require 'connection.php';
if (isset($_POST['register_btn']))
{
   
   $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];
  
   if ($password==$password2)
    {  
        //create user
      // $password=md5($password);
        $q="INSERT INTO users(email,password,name) VALUES('$email','$password','$name')";
        mysqli_query($db,$q);
        
        $_SESSION['message']= "YOU ARE NOW LOGGED IN";
     //   $_SESSION['username']=$_POST['username'];
        header("location: lns.php");  //back to home page 
        mysql_close($db);
}
 else
    {
        $_SESSION['message']="TWO PASSWORDS DO NOT MATCH. ENTER AGAIN";
        //echo "$_SESSION['message']";
        echo "<div>".$_SESSION['message']."</div>";
    }
}
 ?>
  </h3>
</body>
</html>