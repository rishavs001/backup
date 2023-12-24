<?php
session_start();
if (isset($_SESSION['emailadmin'])) {
//connect to database
 $db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
 //require 'connection.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>EDIT QUESTION</title>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta charset="utf-8">

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<link rel = "icon" img href =  "<?php echo base_url('img/newlogo.jpg') ?>"type = "image/x-icon"> 

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
        
 <!-- <script type="text/javascript">
     function check()
     {
      document.getElementById('ss').innerHTML=document.myform.subject.value;
      var sub=  document.getElementById('ss');
    //  document.write('sub');
     }
   </script>v -->


 <div class="container">
      <div class="d-flex justify-content-center ">
        <div class="card">
         
            <div class="card-header">
              <form name="myform" method="POST" action="adminquestionview">
                        <h3>CHOOSE THE SUBJECT TO SEE QUESTIONS </h3>
                        
              <div class="d-flex justify-content-end social_icon">
              
              </div>
            </div>
            <div class="card-body">
              <center><div class="btn-group-vertical">
   <div class="card-header">
  
 <select name="subj">
   <option  >  choose subject </option>

   <?php
  
       $q="SELECT * FROM scategory";
        $result=mysqli_query($db,$q);
        while ($row= mysqli_fetch_array($result)) 
        {
          $cat=$row;
        
 ?>

    <option value="<?php echo  $cat['subjectname'] ?>"><?php echo $cat['subjectname'] ?></option>
   <?php } ?>
         </select>
      
       <br><br>


       <select name="setno">
   <option  >  choose set </option>

   <?php
  
       $q="SELECT * FROM setx";
        $result=mysqli_query($db,$q);
        while ($row= mysqli_fetch_array($result)) 
        {
          $cat=$row;
        
 ?>

    <option value="<?php echo  $cat['setname'] ?>"><?php echo $cat['setname'] ?></option>
   <?php } ?>
         </select>
      
       <br><br>
     
      <!-- <input type="submit" name="ok_btn" onclick='check(); return false' >-->
       <button type="submit" class="btn float reg_btn" name="ok_btn" >VIEW</button> 
</div>
</div>
 </center>
 </form>
  </div>
             
                    
               






     
       
         
    <!--   <button type="button" name="subject" value="sub1" class="btn btn-primary btn-lg">SUB1</button>
       <button type="button" name="subject" value="sub2" class="btn btn-primary btn-lg">SUB2</button>
       <button type="button" name="subject" value="sub3" class="btn btn-primary btn-lg">SUB3</button>
       <button type="button" name="subject" value="sub4" class="btn btn-primary btn-lg">SUB4</button>
       <button type="button" name="subject" value="sub5" class="btn btn-primary btn-lg">SUB5</button>
       <br>
       <br> -->


</div>
<!--<script type="text/javascript">
  document.write(document.myform.subject.value);
</script> 
<p id="ss"></p>-->

</div>
        </div>

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