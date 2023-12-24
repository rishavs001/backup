<?php
session_start();
if (isset($_SESSION['emailuser'])) {
//connect to database
 $db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
 //require 'connection.php';
$_SESSION['subject'] =$_POST['subj'] ;
$_SESSION['subjectr'] =$_POST['subj'] ;
$subj=$_POST['subj'] ;
 $setno=$_POST['setno'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>EXAM PORTAL</title>
  <link rel="stylesheet" type="text/css" href="homestyle.css">
<link rel = "icon" img href =  "<?php echo base_url('img/newlogo.jpg') ?>"type = "image/x-icon">
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
  height : 250px;
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
.login_btn{
  color: black;
  background-color: red;
  width: 100px;
}

.login_btn:hover{
  color: black;
  background-color: yellow;

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
<?php

$sq="SELECT * FROM timer ";
        $result=mysqli_query($db,$sq);
        while ($row= mysqli_fetch_assoc($result))
         {
            
              $hours=$row['hours'];
              $minutes=$row['minutes'];
              $seconds=$row['seconds'];
             
         }

 ?>
<script>

var hoursleft = <?php echo "$hours"; ?>;  //give HOURS you wish
var minutesleft = <?php echo "$minutes"; ?>;; //give minutes you wish
var secondsleft = <?php echo "$seconds"; ?>;; // give seconds you wish
var finishedtext = "Countdown finished!";
var end1;
if(localStorage.getItem("end1")) 
{
end1 = new Date(localStorage.getItem("end1"));
} else {
end1 = new Date();
end1.setHours(end1.getHours()+hoursleft);
end1.setMinutes(end1.getMinutes()+minutesleft);
end1.setSeconds(end1.getSeconds()+secondsleft);

}
var counter = function () {
var now = new Date();
var diff = end1 - now;

diff = new Date(diff);

var milliseconds = parseInt((diff%1000)/100)
    var sec = parseInt((diff/1000)%60)
    var mins = parseInt((diff/(1000*60))%60)
    var hours = parseInt((diff/(1000*60*60))%24);
if (hours < 10) {
    hours = "0" + hours;
}
if (mins < 10) {
    mins = "0" + mins;
}
if (sec < 10) { 
    sec = "0" + sec;
}     
if(now >= end1) {     
    clearTimeout(interval);
   // localStorage.setItem("end", null);
     localStorage.removeItem("end1");
     localStorage.clear();
    document.getElementById('divCounter').innerHTML = finishedtext;
     alert("TIME UP!")
     document.getElementById("form1").submit();
} else {
    var value = hours + ":" +mins + ":" + sec;
    localStorage.setItem("end1", end1);
    document.getElementById('divCounter').innerHTML = value;
}
}
var interval = setInterval(counter, 1000);
</script>



</head>




<body >
  
         <nav class="navbar navbar-expand-sm bg-danger ">  
    
        </nav>
    


<br>
 
           
        <br>   

      
      </script>
      
      <div style=" position: fixed; text-align:  center; background-color: red;z-index: 1000">

<div id="divCounter"></div>
     </div>


<br>

    
         <div class="container">
           <div class="d-flex justify-content-center h-100">
      <div  class="col-sm-8" style="background-color:lavender;">
     
            <div class="card-header">
                        <h3> <?php echo $_SESSION['subject'] ;  ?> </h3>
            </div>
            <div class="card-body">
            
             
              



<form class="form-horizontal" id="form1" role="form" method="POST" action="result">
<?php
     $i=1;
       $q="SELECT * FROM questions WHERE subjectname='$subj' AND setno='$setno'";
        $result=mysqli_query($db,$q);
        while ($row= mysqli_fetch_array($result)) 
        {$cat=$row;
          ?>
<div style="background-color: pink;">
 
   <?php
 
 echo "$i"; $i++; ?>  . <?php
  echo $cat['question']; ?> <br> 
  <?php if(isset( $cat['opt1'])){?>
  <input type="radio" id="opt1" name="<?php
 echo $cat['qid']; ?>" value=" <?php  echo $cat['opt1']; ?>"> <?php  echo $cat['opt1']; } ?>  <br><br>
  <?php if(isset( $cat['opt2'])){?>
  <input type="radio" id="opt2" name="<?php
 echo $cat['qid']; ?>" value=" <?php  echo $cat['opt2']; ?>"> <?php  echo $cat['opt2']; } ?>  <br><br>
  <?php if(isset( $cat['opt3'])){?>
  <input type="radio" id="opt3" name="<?php
 echo $cat['qid']; ?>" value=" <?php  echo $cat['opt3']; ?>"> <?php  echo $cat['opt3']; } ?>  <br><br>
  <?php if(isset( $cat['opt4'])){?>
   <input type="radio" id="opt4" name="<?php
 echo $cat['qid']; ?>" value=" <?php  echo $cat['opt4']; ?>"> <?php  echo $cat['opt4'];} ?>  <br><br>

     
        <input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $cat['qid']; ?>" />


</div>

 </br>
</br>   

 <?php 

 
       }
   
     
 
?>

               
                   
     <input type="submit" onclick="d1();"   name="abc" class="btn float-right login_btn"> 
     <script type="text/javascript">
        function d1() {
     clearTimeout(interval);
   // localStorage.setItem("end", null);
     localStorage.removeItem("end1");
     localStorage.clear();
    //document.getElementById('divCounter').innerHTML = finishedtext;
    document.getElementById("form1").submit();
    }
     </script>
           </form>

            
        </div>
      </div>

   </div>




</body>

</html>


<?php
 }
 else
 {
   echo '<script>alert("ONLY FOR STUDENTS")
   window.location.href= "http://localhost/major/public/"
   </script>';
   ;
 }
 ?>