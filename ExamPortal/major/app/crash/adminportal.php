<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
	
	 <link rel = "icon" img href =  "<?php echo base_url('img/brandlogo.png') ?>"type = "image/x-icon"> 
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

    <style type="text/css">
      body{
  background-image: url(<?php echo base_url('img/mylogin.jpg') ?>);
  background-size: cover;
  background-repeat: no-repeat;
  height" 100%;
  font-family: "Numans","Serif";

}

 .container-fluid {
     /*  opacity: 0.5; */
       color: lightcoral;
}
.col-md-6{
  height : 100%;
  margin-top: auto;
  margin-bottom: 20px;
  width: 500px;
  background-color: rgba(0,0,0,0.5);
}
.col-md-2{
  height : 100%;
  
  margin-bottom: 20px;
  width: 500px;
  background-color: rgba(0,0,0,0.5);
}
    </style>
</head>
<body>
	<div class="container-fluid"> <nav class="navbar navbar-expand-sm  navbar-success">
   <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="<?php echo base_url('img/brandlogo.png') ?>" height="75" width="120"></a>
    </div>
    <ul class="navbar-nav">
    
    <li class="nav-item">
      <a class="nav-link" href="course.html">Courses</a>
    </li>
         <li class="nav-item">
      <a class="nav-link" href="about.html">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.html">Contact Us</a>
    </li>
                <li class="nav-item">
                  <?php
                           if(isset($_SESSION['email']))
                           {
                            //echo $_SESSION['name'];
                             
                        ?>

                        <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
       <?php echo $_SESSION['name'];  ?>
      </a>
      <div class="dropdown-menu">
        
<a href="index.php/HOME/logout1"> <button type="button"  class="btn btn-primary">LOG OUT</button></a>
                          <?php

                           }
                           else
                           {
                            ?>
                        <a class="nav-link" href="index.php/HOME/loginuser"><img src="<?php echo base_url('img/loginlogo.png') ?>" height="50" width="100"></a>
                           <?php
                           }
                           ?>
     
    </li>
       </ul>
        </div>
        </nav>
        <center style="color:blue;font-weight: bold;">PLANET EXAMINATION.COM</center>
    </br><br>
         <nav class="navbar navbar-expand-sm bg-danger ">
         </nav>

         
<br>
 
        </div>
  <div class="container">
      <div class="d-flex justify-content-center h-100">
        <div class="card">
          <form class="form-horizontal" role="form" method="POST" action="loginuser">
            <div class="card-header">
              <h3>USER LOGIN HERE </h3>
                        
              <div class="d-flex justify-content-end social_icon">
              
              </div>
            </div>
            <div class="card-body">
              <center><div class="btn-group-vertical">
    <a href="add_option"><button type="button" class="btn btn-primary">ADD QUESTIONS</button></a>
    <br>
    <br>
     <a href="edit_option"><button type="button"  class="btn btn-primary">EDIT/REMOVE QUESTIONS</button></a>
    <br>
    <br>
    <button type="button" class="btn btn-primary">OTHER PURPOSE</button>
  </div></center>
             
                        </div>
                    </div>
                </form>
              </div>
        </div>
    </div>



</body>

</html>