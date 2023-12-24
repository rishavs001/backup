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

    
    $lq="SELECT email FROM user WHERE email='$email' ";
        $result=mysqli_query($db,$lq);
          $count=mysqli_num_rows($result);
  
   if ($count>0)
    {        
     echo '<script>alert("EMAIL ALREADY EXISTS. ENTER NEW EMAIL ID")</script>';
       // echo "not same";
       // $_SESSION['message']="TWO PASSWORDS DO NOT MATCH. ENTER AGAIN";
        //echo "$_SESSION['message']";
       // echo "<div>".$_SESSION['message']."</div>";
       // echo "one row inserted";
        //create user
      // $password=md5($password);
 
      //   return redirect()->route('loginuser');
}
 else
    {

              $q="INSERT INTO user (address,mobile,email,password,name) VALUES('$address','$mobile','$email','$password','$name')";
        mysqli_query($db,$q);
            echo '<script>alert("YOU ARE NOW REGISTERED AS A USER")
             window.location.href= "loginuser";</script>'; 
        //$_SESSION['message']= "YOU ARE NOW REGISTERED";
       // $_SESSION['name']=$_POST['name'];
       // echo "<div>".$_SESSION['username']."</div>";
        //header("location: index");  //back to home page 
       // echo "<div>".$_SESSION['message']."</div>";
       
      /* $routes->setDefaultMethod('index');
       echo ' <script>
        windows.location="loginuser"
        </script>';*/
         //redirect('loginuser');
       // $this->load->view('loginuser');

        
    }
}
 ?>
  </h3>
</body>
</html>



<!DOCTYPE HTML>
<html>
    <head>
        <title>USER REGISTRATION</title>
      <link rel = "icon" href =  "brandlogo.png" type = "image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">

      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
      

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel = "icon" img href =  "<?php echo base_url('img/newlogo.jpg') ?>"type = "image/x-icon"> 
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

   <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
       <style>
      body{
  background-image: url('mylogin.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  height" 100%;
  font-family: "Numans","Serif";

}

label{
  color: hotpink;
  display:block;
  padding: 10px;

}

.container{
  height: 100%;
  align-content: center;


}

.card{
  height : 970px;
  margin-top: 60px;
  margin-bottom: auto;
  width: 400px;
  background-color: rgba(0,0,0,0.5);
}

.social_icon span{
  font-size: 40px;
  margin-left: 10px;
  color: #FFC312;

}

.social_icon span:hover{
  color: white;
  cursor: pointer;

}

.card-header h3{
  color: lightcoral;
}

.remember{
  color: white;

}

.remember input{
  width: 20px;
  height: 20px
  margin-left: 15px;
  margin-right: 5px;

}

a{
  color: lightcoral;
    

}

i{
  color: lightcoral;
}
i:hover{
    color:white;
    background-color: black;
}

.login_btn{
  color: black;
  background-color: lightcoral;
  width: 100px;
}

.login_btn:hover{
  color: black;
  background-color: white;

}
.links{
  color: white;
}

.links a{
  margin-left: 10px;
}
    </style>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">


<script src="major/4.4.1/js/bootstrap.min.js"></script>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container">
      <a class="navbar-brand" href="#">
    <img src="<?php echo base_url('img/newlogo.jpg') ?>" alt="Logo" style="width:200px; height:100px" >
  </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="collapsenavbar">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="http://localhost/major/public/" class="nav-link"> HOME</a>
        </li>
        <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        SUBJECTS
      </a>
            <div class="dropdown-menu">

        <?php
  
       $q="SELECT * FROM scategory";
        $result=mysqli_query($db,$q);
        while ($row= mysqli_fetch_array($result)) 
        {
          $cat=$row;
        
 ?>

        <a class="dropdown-item" href=""><?php echo $cat['subjectname'] ?></a>
          <?php } ?>
      </div>
    </li>
         <li class="nav-item">
          <a href="resultt" class="nav-link"> RESULT</a>
        </li>
        <li class="nav-item">
         <a href="aboutus" class="nav-link">ABOUT US </a>
        </li>
        <li class="nav-item">
         <a href="contactus" class="nav-link"> CONTACT US</a>
        </li>


        
      </ul>

      </div>
      </div>

  </nav>
</div>
   <nav class="navbar navbar-expand-sm bg-danger ">  
   </nav>     

    </head>
    <body>


        
        <div class="container">
              <div class="d-flex justify-content-center h-100">
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
            
                <button type="submit" name="register_btn" class="btn float reg_btn">REGISTER </button>
            
            </div>
        
            
            <div class="card-footer">
                        <p>Already a member??</p><a href="loginuser">LOGIN</a>
                        </div>
            </div>
            
            </form>
        
        
        </div>
        </div>
      </div>
    </body>
</html>
        