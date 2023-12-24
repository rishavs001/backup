<?php
session_start();
if (isset($_SESSION['emailuser'])) {
//connect to database
 $db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
 //require 'connection.php';
?>



<!DOCTYPE html>
<html>
<head>
	<title>TEST RESULT</title>
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
       <?php echo $_SESSION['name']; 
       $nameo=$_SESSION['name'];  ?>
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
    


<br> <br>   
        

     
      <div class="col-sm-12" style="background-color:lavender;">
     
            <div class="card-header">
                        <h3> RESULT</h3>
            </div>
            <div class="card-body">
            
             <table class="table table-bordered">
              <tr>
                <th>No</th>
                 <th>Question</th>
                  <th>Opt1</th>
                   <th>Opt2</th>
                    <th>Opt3</th>
                     <th>Opt4</th> 
                     <th>Answer</th>
                      <th>CHOOSEN ANSWER</th>
                      <th>MARKS</th>
              </tr>
<?php


$list=$_POST;
//print_r($list);
echo "<br>";
$right=0;
$wrong=0;
$no_attempt=0;
$i=1;
foreach ($list as $key => $value)
 {
//echo $value . " in " . $key . ", ";
 //    echo "qid= $key" ;?> &nbsp;&nbsp;&nbsp; <?php
   //   echo "choosen answer= $value" ;
    // echo "<br>";
if ($value!="no_attempt") 
{

     $q="SELECT * FROM questions WHERE qid='$key'";
     
       $result=mysqli_query($db,$q);
    
        while ($row= mysqli_fetch_array($result)) 
        {
          $cat=$row;
         $answer=$row['answer'];

//echo gettype($answer) ;


$a=trim($value);
//$b=trim($answer);
//echo gettype($value);
//echo "<br>";


          if ($a==$answer)
          {
            $right++;
            
           
          }
          else
          {
            $wrong++;
            
         
          }
        }
}
else
{
  $no_attempt++;
}

?>
<?php

   // $subj=$_POST['subj'];
  
  //   $_SESSION['subject']=$subject;
       $q="SELECT * FROM questions WHERE qid='$key'";
        $result=mysqli_query($db,$q);
        while ($row= mysqli_fetch_array($result)) 
        {$cat=$row;
        $subjectname= $cat['subjectname'];
        $setno= $cat['setno'];
echo "<tr>";
 echo "<td>";  echo "$i"; $i++; echo "</td>";

   echo "<td>"; echo $cat['question'];  echo "</td>";
    echo "<td>"; echo $cat['opt1']; echo "</td>";
    echo "<td>"; echo $cat['opt2']; echo "</td>";
   echo "<td>"; echo $cat['opt3']; echo "</td>";
    echo "<td>"; echo $cat['opt4']; echo "</td>";
    echo "<td>"; echo $cat['answer']; echo "</td>";
     echo "<td>"; echo $value; echo "</td>";
      echo "<td>"; 
      if ($value!="no_attempt") 
        {
        // $s= (string)$value;
        // echo gettype($value) ;
         
          if ($a==$answer)
          {
        echo "+1";
            
           
          }
          else if ($a!=$answer)
          {
          
          echo "-1";
          //echo $cat['answer'];
          //echo $value;
          }
        
}
else
{
  echo "0";
}

           echo "</td>";
   echo "</tr>";
 
     
     } 
      
}


?>
           </table>    
             <?php
             echo "<br>";echo "<br>";
     //  $nameo= $_SESSION['name'];
     //$_SESSION['subject']=$subject;

$totalques=$right+$wrong+$no_attempt;
$total= $right+$wrong+$no_attempt;
echo "TOTAL QUESTIONS:$totalques";echo "<br>";
echo "Right:$right";echo "<br>";
echo "Wrong:$wrong";echo "<br>";
echo "No_attempt:$no_attempt";echo "<br>";
$totalob=(1*$right)-(1*$wrong)+(0*$no_attempt);
//$percentage=(($totalob/$total)*100);
echo "TOTAL=$totalob";echo "<br>";


echo "OUT OF: $total";echo "<br>";


$lq="SELECT * FROM student_record WHERE studentname='$nameo' AND subjectname='$subjectname' AND setno='$setno' ";
        $result=mysqli_query($db,$lq);
          $count=mysqli_num_rows($result);
     
  
 if ($count==0)
    {
 $ltq="INSERT INTO student_record (studentname,subjectname,setno,rightx,wrongx,no_attempt,marks_obtained,total) VALUES('$nameo','$subjectname','$setno','$right','$wrong','$no_attempt','$totalob','$total')";
        mysqli_query($db,$ltq);
}
?>         
           
            <a href="userportal"><button name="ok_btn"  class="btn btn-primary">OK</button></a>




        </div>

     </div>


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