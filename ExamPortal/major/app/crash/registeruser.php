<?php
session_start();

//connect to database
 $db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
 //require 'connection.php';
if (isset($_POST['register_btn']))
{
   
   $name=$_POST['name'];
    $address=$_POST['address'];
     $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
  
   if ($password==$cpassword)
    {  
        echo "one row inserted";
        //create user
      // $password=md5($password);
        $q="INSERT INTO user (address,mobile,email,password,name) VALUES('$address','$mobile','$email','$password','$name')";
        mysqli_query($db,$q);
            echo '<script>alert("YOU ARE NOW REGISTERED AS A USER")</script>'; 
        //$_SESSION['message']= "YOU ARE NOW REGISTERED";
       // $_SESSION['name']=$_POST['name'];
       // echo "<div>".$_SESSION['username']."</div>";
        //header("location: index");  //back to home page 
       // echo "<div>".$_SESSION['message']."</div>";
        mysqli_close($db);
       echo ' <script>
        windows.location="loginuser"
        </script>';
}
 else
    {
       echo '<script>alert("TWO PASSWORDS DO NOT MATCH. ENTER AGAIN")</script>';
       // echo "not same";
       // $_SESSION['message']="TWO PASSWORDS DO NOT MATCH. ENTER AGAIN";
        //echo "$_SESSION['message']";
       // echo "<div>".$_SESSION['message']."</div>";
    }
}
 ?>
  </h3>
</body>
</html>



<!DOCTYPE HTML>
<html>
    <head>
        <title>USER REGISTRATION  FORM </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <style type="text/css">
        body{
  background-image: url('mylogin.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  height" 100%;
  font-family: "Numans","Serif";

}

.container{
  height: 100%;
  align-content: center;


}
.card{
  height : 850px;
  margin-top: auto;
  margin-bottom: 20px;
  width: 500px;
  background-color: rgba(0,0,0,0.5);
}
label{
  color: white;
  display:block;
  padding: 10px;
}

.card-header h3{
  color: lightcoral;
}

i{
  color: lightcoral;
}
.reg_btn{
  color: black;
  background-color: lightcoral;
  width: 100px;
}

.reg_btn:hover{
  color: black;
  background-color: white;

}

a{
  color: lightcoral;
    

}
      </style>
        
    </head>
    <body>
        
        <div class="container">
           
            <div class="card">
        <form data-toggle="validator" role="form" method="POST" action="registeruser">
            <div class="card-header">
                        <h3>USER REGISTER HERE </h3>
            </div>
            <div class="card-body">
           <div class= "form-group">
               
               
            <label for="inputName" class="control-label"> NAME:</label> 
               
               <input type="text" class="form-control" id="inputName" placeholder="NAME " name="name" required>
            </div> 
            
            <div class="form-group">
            <label for="inputAdd" class="control-label"> ADDRESS: </label> 
               <input type="text" class="form-control" id="inputAdd" placeholder="ADDRESS " name="address" required>
            </div>
            
            <div class="form-group has-feedback">
            <label for="inputMobile" class="control-label"> MOBILE:</label>
                
               <input type="text" pattern="^[_0-9]{1,}$"  data-minlength="10" maxlength="10" class="form-control" id="inputMobile" placeholder="MOBILE " name="mobile" required>
           
            <span class="glyphicon form-control-feedback" aria-hidden="true" ></span>
                <div class="help-block with-errors"><label> ENTER ONLY 10 DIGIT NUMBERS</label></div>
            </div>
            
            <div class="form-group">
            <label for="inputEmail" class="control-label"> EMAIL: </label> 
               <input type="email" class="form-control" id="inputEmail" placeholder="EMAIL " data-error="ENTER VALID EMAIL ADDRESS" name="email" required>
                <div class="help-block with-errors"></div>
            </div> 
            
               <div class="form-group">
            <label for="inputPassword" class="control-label"> PASSWORD: </label> 
               <input type="password"  data-minlength="6" class="form-control" id="inputPassword" placeholder="PASSWORD" data-error="INVALID PASSWORD"  name="password" required>
                   <div class="help-block with-errors"></div>
            </div>
                   
                    <div class="form-group">
            <label for="inputPassword" class="control-label">  CONFIRM PASSWORD: </label> 
               <input type="password"   class="form-control" id="inputPasswordconfirm" data-match="#inputPassword" data-match-error="PASSWORD DID NOT MATCH" placeholder="CONFIRM PASSWORD"  name="cpassword" required>
                   <div class="help-block with-errors"></div>
                        
                    </div>
            <div class="form-group">
            <div class="checkbox">
                <label>
                <input type="checkbox" id="terms" data-error="please agree to the terms and conditions first" required>
                I AGREE TO THE TERMS AND CONDITIONS</label>
                <div class="help-block with-errors"></div>
            </div>
            </div>
            
            <div class="form-group">
            
                <button type="submit" name="register_btn" class="btn float-right reg_btn">REGISTER </button>
            
            </div>
        
            
            <div class="card-footer">
                        <p>Already a member??</p><a href="loginuser">LOGIN</a>
                        </div>
            </div>
            
            </form>
        
        
        </div>
        </div>
    </body>
</html>
        