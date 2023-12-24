
<?php
session_start();
if (isset($_SESSION['email'])) {
 $db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title> RESULT </title>
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
 <?php
  if (isset($_SESSION['emailuser'])) {
    
  
?>
		<div class="container-fluid">
		
		
      <center>
<div class="card">

      <div class="col-sm-12" style="background-color:lavender;">
     
            <div class="card-header">
                        <h3>PERFORMANCE</h3>
            </div>
            <div class="card-body">
            
             <table class="table table-bordered">
              <tr>
                <th>NO</th>
                <th>SUBJECT</th>
                 <th>SET</th>
                  <th>RIGHT</th>
                   <th>WRONG</th>
                    <th>NOT ATTEMPTED</th>
                     <th>MARKS OBTAINED</th> 
                     <th>TOTAL</th>
                     
                      
              </tr>
              <?php

    $subj=$_POST['subj'];
     $setno=$_POST['setno'];
     $_SESSION['subject']=$subject;
     $studentname=$_SESSION['name'];
    $i=1;
       $q="SELECT * FROM student_record WHERE studentname='$studentname'";
        $result=mysqli_query($db,$q);
        while ($row= mysqli_fetch_array($result)) 
        {$cat=$row;
          

echo "<tr>";
 echo "<td>"; echo "$i"; $i++; echo "</td>";
   echo "<td>"; echo $cat['subjectname'];  echo "</td>";
    echo "<td>"; echo $cat['setno']; echo "</td>";
    echo "<td>"; echo $cat['rightx']; echo "</td>";
   echo "<td>"; echo $cat['wrongx']; echo "</td>";
    echo "<td>"; echo $cat['no_attempt']; echo "</td>";
    echo "<td>"; echo $cat['marks_obtained']; echo "</td>";
    echo "<td>"; echo $cat['total']; echo "</td>";
   echo "</tr>";
 
     
     } 
      

?>

             </table>             
            
            
        </div>
     </div>



          </div></center>
			<br>

			
      


		</div>
    <?php  
        }elseif ((isset($_SESSION['emailadmin']))) {
      ?>
        <div class="container-fluid">
    
    
      <center>
<div class="card">

      <div class="col-sm-12" style="background-color:lavender;">
     
            <div class="card-header">
                        <h3>PERFORMANCE</h3>
            </div>
            <div class="card-body">
            
             <table class="table table-bordered">
              <tr>
                <th>NO.</th>
                <th>STDENT NAME</th>
                <th>SUBJECT</th>
                 <th>SET</th>
                  <th>RIGHT</th>
                   <th>WRONG</th>
                    <th>NOT ATTEMPTED</th>
                     <th>MARKS OBTAINED</th> 
                     <th>TOTAL</th>
                     
                      
              </tr>
              <?php

    $subj=$_POST['subj'];
     $setno=$_POST['setno'];
     $_SESSION['subject']=$subject;
     $studentname=$_SESSION['name'];
    $i=1;
       $q="SELECT * FROM student_record ";
        $result=mysqli_query($db,$q);
        while ($row= mysqli_fetch_array($result)) 
        {$cat=$row;
          

echo "<tr>";
 echo "<td>"; echo "$i"; $i++; echo "</td>";
 echo "<td>"; echo $cat['studentname'];  echo "</td>";
   echo "<td>"; echo $cat['subjectname'];  echo "</td>";
    echo "<td>"; echo $cat['setno']; echo "</td>";
    echo "<td>"; echo $cat['rightx']; echo "</td>";
   echo "<td>"; echo $cat['wrongx']; echo "</td>";
    echo "<td>"; echo $cat['no_attempt']; echo "</td>";
    echo "<td>"; echo $cat['marks_obtained']; echo "</td>";
    echo "<td>"; echo $cat['total']; echo "</td>";
   echo "</tr>";
 
     
     } 
      

?>

             </table>             
            
            
        </div>
     </div>



          </div></center>
      <br>

      
      


    </div>
    <?php  }  ?>
</div>
</body>
</html>
 <?php
 }
 else
 {
   echo '<script>alert("PLEASE LOGIN FIRST")
   window.location.href= "http://localhost/major/public/"
   </script>';
   ;
 }
 ?>