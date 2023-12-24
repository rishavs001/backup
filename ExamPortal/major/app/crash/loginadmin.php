    <?php
session_start();

//connect to database
 $db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
if (isset($_POST['login_btn']))
{
   
  //  $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
 //   $password2=$_POST['password2'];
  
    
    //   $password=md5($password);
        $q="SELECT * FROM admin WHERE email='$email'";
        $result=mysqli_query($db,$q);
        while ($row= mysqli_fetch_assoc($result)) {
            $pswdb=$row['password'];
             $namedb=$row['name'];
       }
        if ($pswdb==$password) {
          //  echo "abc";
            $_SESSION['email']=$email;
            $_SESSION['name']=$namedb;
          //  redirect('redirect/add_edit_option',);
          //  header("location: add_edit_option"); 
          //  return redirect(welcome);
        //public function welcome()
        //{
        	//$this->load->view('add_edit_option');
        //}
       echo '<script>alert("YOU ARE NOW LOGGED IN AS AN ADMIN")</script>'; 
        $_SESSION['message']= "ADMIN";
      //  $_SESSION['username']=$_POST['username'];
    //  header("location: index");  //back to home page 

       // echo "<div>".$_SESSION['message']."</div>";
         // mysql_close($db);
}
 else
    {
    	echo '<script>alert("INCORRECT USERNAME/PASSWORD")</script>'; 
       // header("location: home2.php");
       // $_SESSION['message']="INCORRECT USERNAME/PASSWORD";
      //  $a=$_SESSION['message'];
        //echo "<div>".$_SESSION['message']."</div>";
    }
}
 ?>



<!DOCTYPE HTML>
<html>
<head>
	<title> USER LOGIN FORM </title>
	<link rel = "icon" href =  "brandlogo.png" type = "image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

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
	height : 450px;
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


</head>
<link rel="stylesheet" type="text/css" href="loginstyle.css">


<script src="major/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<a href="index" ><input  class="btn float-left login_btn" type="button" value ="HOME"></a>
	
	<a href="adminportal" ><input  class="btn float-left login_btn" type="button" value ="ADMINPORTAL"></a>
	  <?php
       ?> 
	<div class="container">
		  <div class="d-flex justify-content-center h-100">
		  	<div class="card">
		  		<form class="form-horizontal" role="form" method="POST" action="loginadmin">
		  			<div class="card-header">
		  				<h3> ADMIN LOGIN HERE </h3>
                        
		  				<div class="d-flex justify-content-end social_icon">
		  					<span> <a href="http://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
		  					</span>
		  					<span> <a href="http://www.gmail.com"><i class="fab fa-google-plus-square"></i></a>
		  					</span>
		  					<span> <a href="http://www.twitter.com"><i class="fab fa-twitter-square"></i></a>
		  					</span>
		  				</div>
		  			</div>
		  			<div class="card-body">
		  				
		  					<div class="input-group form-group">
		  						<div class="input-group-prepend">
		  							<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>
		  							</span>
		  						</div>
		  						<input type="text" class="form-control" placeholder="EMAIL" name="email" required autofocus>

		  					</div>

		  					<div class="input-group form-group">
		  						<div class="input-group-prepend">
		  							<span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i>
		  							</span>
		  						</div>
		  						<input type="password" class="form-control" placeholder="PASSWORD" name="password" required autofocus>

		  					</div>

		  					<div class="row align-items-center remember">
		  						<input type="checkbox"> REMEMBER ME?
		  					</div>
		  					<div class="form-group">
		  						<input type="submit" name="login_btn" value="LOGIN" class="btn float-right login_btn">
		  				
		  			</div>
                        </form>
                        <br>
		  			<div class="card-footer">
		  				<div class="d-flex justify-content-center links">Don't have an account?<a href="registeradmin">Sign Up</a>
		  				</div>
                        <br>
                       		  				<div class="d-flex justify-content-center "> <a href="forget.html">FORGOT PASSWORD?</a>
		  			</div>
                        </div>
                    </div>
                </form>
              </div>
        </div>
    </div>


</body>
</html>
		  		
		  					




