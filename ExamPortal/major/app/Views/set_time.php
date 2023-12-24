<?php
session_start();
if (isset($_SESSION['emailadmin'])) {
//connect to database
 $db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));

?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD SET</title>
	
	 <link rel = "icon" img href =  "<?php echo base_url('img/brandlogo.png') ?>"type = "image/x-icon"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta charset="utf-8">
<link rel = "icon" img href =  "<?php echo base_url('img/newlogo.jpg') ?>"type = "image/x-icon"> 
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
  background-image: url('mylogin.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  height" 100%;
  font-family: "Numans","Serif";

}

.container{
  height: 100%;
}

#subjects{
  width: 100%;
}
.card{
  height : 100%;
  margin-top: 0px;
  margin-bottom: 20px;
  width: 300px;
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
.container-fluid {
     /*  opacity: 0.5; */
       color: lightcoral;
}
      </style>

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

</head>
<body>
	
       <nav class="navbar navbar-expand-sm bg-danger ">  
   </nav>  
   <a href="adminportal" ><input  class="col-sm" type="button" value ="ADMINPORTAL"></a>     
<br>
<br>
   </div>


<?php
$sq="SELECT * FROM timer ";
        $result=mysqli_query($db,$sq);
        while ($row= mysqli_fetch_assoc($result))
         {
            
              $hrsx=$row['hours'];
              $minsx=$row['minutes'];
              $secx=$row['seconds'];
             
         }

?>

        <br>
  <div class="container">
    <br>
      <div class="d-flex justify-content-center h-100">
        <div class="card">
          <form class="form-horizontal" role="form" method="POST" action="set_time">
            <div class="card-header">
              <h3>SET TIME </h3>
                        
              <div class="d-flex justify-content-end social_icon">
              
              </div>
            </div>
            <div class="card-body">
              
    <label for="hours" class="control-label"> HOURS: </label> 
         <input type="text" class="form-control" id="hours"  name="hrs" value="<?php echo($hrsx)?>" required>
<br>
    <label for="minutes" class="control-label"> MINUTES: </label> 
         <input type="text" class="form-control" id="minutes"  name="mins" value="<?php echo($minsx)?>" required>
<br>
    <label for="seconds" class="control-label"> SECONDS: </label> 
         <input type="text" class="form-control" id="seconds"  name="sec" value="<?php echo($secx)?>" required>
<br>
            <button type="submit" class=" btn btn-primary" name="set_btn" > SET</button>  
  
             </div>  
               </form>
                 </div>
              </div>
        </div>
</body>
<?php

if(isset($_POST['set_btn']))
{

    $hrs=$_POST['hrs'];
    $mins=$_POST['mins'];
    $sec=$_POST['sec'];
    
  
   /* $q="UPDATE sub1
SET question_no=$question_no, question='$question',opt1='$opt1',opt2='$opt2',opt3='$opt3',opt4='$opt4',answer='$answer'
WHERE question_no='$question_no';"
       mysqli_query($db,$q);
       mysqli_close($db);*/

  $q="UPDATE timer
SET  hours='$hrs',minutes='$mins',seconds='$sec'";
   mysqli_query($db,$q);
        
 mysqli_close($db);
  echo '<script>alert("NEW TIME SET")
   window.location.href= "set_time";</script>';
 } 

?>



</body>

</html>

<?php
 }
 else
 {
   echo '<script>alert("ONLY ADMIN CAN ACCESS THIS")
   window.location.href= "http://localhost/major/public/"
   </script>';
   ;
 }
 ?>