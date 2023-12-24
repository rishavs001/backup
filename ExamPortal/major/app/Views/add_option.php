<?php
session_start();
if (isset($_SESSION['emailadmin'])) {
//connect to database
 $db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
 //require 'connection.php';
if (isset($_POST['add_btn']))
{ 
    $subjectname=$_POST['subjectname'];
    $setname=$_POST['setname'];
   $question=$_POST['question'];
    $opt1=$_POST['opt1'];
    $opt2=$_POST['opt2'];
    $opt3=$_POST['opt3'];
    $opt4=$_POST['opt4'];
    $answer=$_POST['answer'];


  $lq="SELECT question FROM questions WHERE question='$question' ";
        $result=mysqli_query($db,$lq);
          $count=mysqli_num_rows($result);
     
  
 if ($count>0)
    {  
      echo '<script>alert("QUESTION ALREADY EXISTS. ENTER NEW QUESTION")</script>'; 
       
}
 else
    {
   
     $subject=$_POST['subject'];
      $_SESSION['subject']=$subject;
        $q="INSERT INTO questions (subjectname,setno,question,opt1,opt2,opt3,opt4,answer) VALUES('$subjectname','$setname','$question','$opt1','$opt2','$opt3','$opt4','$answer')";
        mysqli_query($db,$q);
      echo '<script>alert("QUESTION ADDED TO THE LIST")
       window.location.href= "adminportal";
       </script>'; 
}
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD QUESTIONS</title>
	<link rel="stylesheet" type="text/css" href="homestyle.css">

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
<link rel = "icon" img href =  "<?php echo base_url('img/newlogo.jpg') ?>"type = "image/x-icon"> 
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
        <form data-toggle="validator" class="form1" role="form" method="POST" action="add_option">
         <div class="row">
    <!-- <div class="col-sm-3" >
          
   <div class="card-header">
                        <h3>CHOOSE THE SUBJECT </h3>
 <select id="subjects" name="subjects">
   <option  >  choose subject </option>
    <option value="sub1">SUB1</option>
    <option value="sub2">SUB2</option>
     <option value="sub3">SUB3</option>
      <option value="sub4">SUB4</option>
       <option value="sub5">SUB5</option>
       <br>
       <br>
  </select>
 
</div>



        </div>-->


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <div class="col-sm-8" style="background-color:lavender;">
          
        <form data-toggle="validator" class="form1" role="form" method="POST" action="add_edit_option">
            <div class="card-header">
                        <h3> SET QUESTIONS </h3>
            </div>
            <div class="card-body">
              
<label for="inputSUBJECT" class="control-label">CHOOSE SUBJECT:</label> 
<select class="form-control" id="inputSUBJECT" name="subjectname">
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




<label for="inputSET" class="control-label">CHOOSE SET:</label> 
<select class="form-control" id="inputSET" name="setname">
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
     
     

               
            <label for="inputQUESTION" class="control-label">QUESTION:</label> 
               <input type="text" class="form-control" id="inputQUESTION" placeholder="QUESTION " name="question" required>
         
            <label for="inputOPT1" class="control-label"> OPTION1 </label> 
               <input type="text" class="form-control" id="inputOPT1" placeholder="OPTION1" name="opt1" required>
           
             <label for="inputOPT2" class="control-label"> OPTION2 </label> 
               <input type="text" class="form-control" id="inputOPT2" placeholder="OPTION2" name="opt2" required>
           
             <label for="inputOPT3" class="control-label"> OPTION3 </label> 
               <input type="text" class="form-control" id="inputOPT3" placeholder="OPTION3" name="opt3" required>
           
             <label for="inputOPT4" class="control-label"> OPTION4 </label> 
               <input type="text" class="form-control" id="inputOPT4" placeholder="OPTION4" name="opt4" required>
           
             <label for="inputANS" class="control-label">CORRECT ANSWER </label> 
               <input type="text" class="form-control" id="inputANS" placeholder="CORRECT ANSWER" name="answer" required>
            <br>
                <button type="submit" name="add_btn" class="btn float-right reg_btn">ADD QUESTION</button>
            
            </form>
        
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