
<?php
session_start();
 $db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title> ABOUT US </title>
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
  width: 800px;
  background-color: white;
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
			<h3 style="text-align:center;"><u><b>ABOUT US:</b></u></h3>
      <center>
<div class="card">
  
          <p>Planet is India's leading online test  platform. A site for educators, allows them to create and administer tests in a fast and reliable way.We run tests to measure merit  across all domains - from programming to plumbing. Planet works with 600+ companies  and has access to more than a million candidates through its platform. We run 2 million+ tests  each year in 350+ cities; thus, everyday helping our  clients reduce interview bandwidth using our central test platform, helping our institutional clients measure and improve employability and helping candidates move ahead on their career path. Our vision is to ensure that everyone in the country gets an equal opportunity to build a career. We are the visionaries of this space with a strong growth trajectory and an exciting firm to be with.
		</p></div></center>
			<br>

			
      


		</div>
</div>
</body>
</html>
