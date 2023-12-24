
<?php
session_start();
 $db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title> CONTACT US </title>
	<link rel = "icon" img href =  "<?php echo base_url('img/newlogo.jpg') ?>"type = "image/x-icon"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="indexstyle.css">
<style type="text/css">
  .card{
  height : 100%;
  margin-top: 100px;
  margin-bottom: auto;
 background-color: lavender;
 
}
.col-sm-8
{
  text-align: left;
}
</style>
</head>

<body>

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
        
<a href="logout1" class="btn btn-primary"> LOGOUT</a>
                          <?php

                           }
                           else
                           {
                            ?>
                            <a href="loginuser" class="nav-link"> LOGIN</a>
                       
                           <?php
                           }
                           ?>



					
				



				</li>
			</ul>

			</div>
	    </div>

	</nav>
</div>
 <nav class="navbar navbar-expand-sm bg-danger ">  
   </nav>
	



          </div>
 </div>
		<div class="container-fluid">
			<br>
			<h1 style="text-align:center;"><u><b>CONTACT US:</b></u></h3>
      <center>
        <br>
        <div  class="col-sm-8" style="background-color:lavender;">

 
        <h3 >RISHAV SHAH</h3>
            <ul>
              <li>Phone:8013073625</li>
              <li>Email:risu55.2014@gmail.com</li>
            </ul>
			<br>
      <h3 >PRATIMA RAY</h3>
            <ul>
              <li>Phone:7488334264</li>
              <li>Email:roypratima373@gmail.com</li>
            </ul>
      <br>
      <h3 >ANKITA DEY</h3>
            <ul>
              <li>Phone:7980695441</li>
              <li>Email:ankita.dey250199@gmail.com</li>
            </ul>
      <br>
       
      <h3 >ARGHA MANDAL</h3>
            <ul>
              <li>Phone:9073160479</li>
              <li>Email:argha272@gmail.com</li>
            </ul>
      <br>
      <h3 >AVILASH JHA</h3>
            <ul>
              <li>Phone:8583823014</li>
              <li>Email:aavilash78272@gmail.com</li>
            </ul>
 

</div></center>
			<br>
      


		</div>
</div>
</body>
</html>