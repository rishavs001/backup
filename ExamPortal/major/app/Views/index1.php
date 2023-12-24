
<?php
session_start();
 $db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title> HOME </title>
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
					<a href="" class="nav-link"> HOME</a>
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
					<a href="index.php/HOME/resultt" class="nav-link"> RESULT</a>
				</li>
				<li class="nav-item">
					<a href="index.php/HOME/aboutus" class="nav-link">ABOUT US </a>
				</li>
				<li class="nav-item">
					<a href="index.php/HOME/contactus" class="nav-link"> CONTACT US</a>
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
        
<a href="index.php/HOME/logout1" class="btn btn-primary"> LOGOUT</a>
                          <?php

                           }
                           else
                           {
                            ?>
                            <a href="index.php/HOME/loginuser" class="nav-link"> LOGIN</a>
                       
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
	



	<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <br>
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img img src="<?php echo base_url('img/carousel5.jpg') ?>" alt="1" width="1350" height="300">
      </div>

    <div class="carousel-item">

      <img img src="<?php echo base_url('img/carousel12.jpg') ?>" alt="2" width="1350" height="300">
      

    </div>
    <div class="carousel-item">
    	
      <img img src="<?php echo base_url('img/carousel11.jpg') ?>" alt="3" width="1350" height="300">
 
      </div>
   
 </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

          </div>
 </div>
		<div class="container-fluid">
			<br>
			<h3 style="text-align:center;"><u>
        <?php
          if (isset($_SESSION['emailuser'])) {
        ?>
        <a href="index.php/home/userportal">
          <b>PLEASE SELECT THE SUBJECT </b></a></u></h3><br>
<?php

                    }
                    elseif (isset($_SESSION['emailadmin'])) {
        ?> 
            <a href="index.php/home/adminportal">
          <b>ADMIN PORTAL</b></a></u></h3><br>
<?php
       }
        else{
          ?>
               <a href="">

      
          <b>PLEASE SELECT THE SUBJECT <br><h4>(PLEASE LOGIN FIRST)</h4></b></a></u></h3><br>

		<?php } ?>
			<br>

			
      


		</div>
</div>
</body>
</html>
	



				