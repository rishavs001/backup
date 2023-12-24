<?php
session_start();
//connect to database
 $db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
 //require 'connection.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
	 <a href="index"></a><link rel = "icon" img href =  "<?php echo base_url('img/brandlogo.png') ?>"type = "image/x-icon"> </a>
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
</head>
<body>
	<div class="container-fluid"> <nav class="navbar navbar-expand-sm  navbar-success">
   <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="<?php echo base_url('img/brandlogo.png') ?>" height="75" width="120"></a>
    </div>
    <ul class="navbar-nav">

    <li class="nav-item">
      <a class="nav-link" href="index">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="course">Courses</a>
    </li>
         <li class="nav-item">
      <a class="nav-link" href="about">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact">Contact Us</a>
    </li>
                <li class="nav-item">
                  <?php
                           if(isset($_SESSION['email']))
                           {
                            //echo $_SESSION['name'];
                             
                        ?>
</li>
                        <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
       <?php echo $_SESSION['name'];  ?>
      </a>
      <div class="dropdown-menu">
        
<a href="logout1"> <button type="button"  class="btn btn-primary">LOG OUT</button></a>
                          <?php

                           }
                           else
                           {
                            ?>
                        <a class="nav-link" href="index.php/HOME/login1"><img src="<?php echo base_url('img/loginlogo.png') ?>" height="50" width="100"></a>
                           <?php
                           }
                           ?>

                         
                          </div>
                         
                        </li>
                      </ul>
                    </div>
                  </nav>
                </div>


                      </br>
         <nav class="navbar navbar-expand-sm bg-danger ">  
    
        </nav>
    

 
           
        <br>   
        
   




     
        <form data-toggle="validator" class="form1" role="form" method="POST" action="add_edit_option">
         <div class="row">
      <div class="col-sm-3" >
          
   <div class="card-header">
                        <h3>CHOOSE THE SUBJECT </h3>
 <!--<select id="subjects" name="subjects">
   <option  >  choose subject </option>
    <option value="sub1">SUB1</option>
    <option value="sub2">SUB2</option>
     <option value="sub3">SUB3</option>
      <option value="sub4">SUB4</option>
       <option value="sub5">SUB5</option> -->
       
       <button type="button" name="subject" value="sub1" class="btn btn-primary btn-lg">SUB1</button>
       <button type="button" name="subject" value="sub2" class="btn btn-primary btn-lg">SUB2</button>
       <button type="button" name="subject" value="sub3" class="btn btn-primary btn-lg">SUB3</button>
       <button type="button" name="subject" value="sub4" class="btn btn-primary btn-lg">SUB4</button>
       <button type="button" name="subject" value="sub5" class="btn btn-primary btn-lg">SUB5</button>
       <br>
       <br>
  </select>
 
</div>



        </div>




      <div class="col-sm-8" style="background-color:lavender;">
          
     <form data-toggle="validator" class="form1" role="form" method="POST" action="add_edit_option">
            <div class="card-header">
                        <h3> EDIT QUESTIONS </h3>
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
                      <th>Edit</th>
                      <th>Delete</th>
              </tr>
<?php
if (isset($_POST['subject']))
{ 
  /*  $question_no=$_POST['question_no'];
   $question=$_POST['question'];
    $opt1=$_POST['opt1'];
    $opt2=$_POST['opt2'];
    $opt3=$_POST['opt3'];
    $opt4=$_POST['opt4'];
    $answer=$_POST['answer'];
  
    */ 
     $subject=$_POST['subjects'];
   if ($subject === "sub1") 
   {
       $q="SELECT * FROM sub1";
        $result=mysqli_query($db,$q);
        while ($row= mysqli_fetch_array($result)) 
        {

echo "<tr>";
 echo "<td>"; echo $row['question_no']; echo "</td>";
   echo "<td>"; echo $row['question'];  echo "</td>";
    echo "<td>"; echo $row['opt1']; echo "</td>";
    echo "<td>"; echo $row['opt2']; echo "</td>";
   echo "<td>"; echo $row['opt3']; echo "</td>";
    echo "<td>"; echo $row['opt4']; echo "</td>";
    echo "<td>"; echo $row['answer']; echo "</td>";
     echo "<td>"; echo 'edit'; echo "</td>";
       echo "<td>"; echo'delete'; echo "</td>";
   echo "</tr>";
 
       }
     }/* 
      elseif ($subject === "sub2") 
   {  
           $q="SELECT * FROM sub2";
        $result=mysqli_query($db,$q);
        while ($row= mysqli_fetch_array($result)) 
        {

echo "<tr>";
 echo "<td>"; echo $row['question_no']; echo "</td>";
   echo "<td>"; echo $row['question'];  echo "</td>";
    echo "<td>"; echo $row['opt1']; echo "</td>";
    echo "<td>"; echo $row['opt2']; echo "</td>";
   echo "<td>"; echo $row['opt3']; echo "</td>";
    echo "<td>"; echo $row['opt4']; echo "</td>";
    echo "<td>"; echo $row['answer']; echo "</td>";
     echo "<td>"; echo 'edit'; echo "</td>";
       echo "<td>"; echo'delete'; echo "</td>";
   echo "</tr>";
       }
      }
       elseif ($subject === "sub3") 
   {      $q="SELECT * FROM sub3";
        $result=mysqli_query($db,$q);
        while ($row= mysqli_fetch_array($result)) 
        {

echo "<tr>";
 echo "<td>"; echo $row['question_no']; echo "</td>";
   echo "<td>"; echo $row['question'];  echo "</td>";
    echo "<td>"; echo $row['opt1']; echo "</td>";
    echo "<td>"; echo $row['opt2']; echo "</td>";
   echo "<td>"; echo $row['opt3']; echo "</td>";
    echo "<td>"; echo $row['opt4']; echo "</td>";
    echo "<td>"; echo $row['answer']; echo "</td>";
     echo "<td>"; echo 'edit'; echo "</td>";
       echo "<td>"; echo'delete'; echo "</td>";
   echo "</tr>";
       }
      }
       elseif ($subject === "sub4") 
   {  
           $q="SELECT * FROM sub4";
        $result=mysqli_query($db,$q);
       while ($row= mysqli_fetch_array($result)) 
        {

echo "<tr>";
 echo "<td>"; echo $row['question_no']; echo "</td>";
   echo "<td>"; echo $row['question'];  echo "</td>";
    echo "<td>"; echo $row['opt1']; echo "</td>";
    echo "<td>"; echo $row['opt2']; echo "</td>";
   echo "<td>"; echo $row['opt3']; echo "</td>";
    echo "<td>"; echo $row['opt4']; echo "</td>";
    echo "<td>"; echo $row['answer']; echo "</td>";
     echo "<td>"; echo 'edit'; echo "</td>";
       echo "<td>"; echo'delete'; echo "</td>";
   echo "</tr>";
       }
      }
       elseif ($subject === "sub5") 
   {  
            $q="SELECT * FROM sub5";
        $result=mysqli_query($db,$q);
        while ($row= mysqli_fetch_array($result)) 
        {

echo "<tr>";
 echo "<td>"; echo $row['question_no']; echo "</td>";
   echo "<td>"; echo $row['question'];  echo "</td>";
    echo "<td>"; echo $row['opt1']; echo "</td>";
    echo "<td>"; echo $row['opt2']; echo "</td>";
   echo "<td>"; echo $row['opt3']; echo "</td>";
    echo "<td>"; echo $row['opt4']; echo "</td>";
    echo "<td>"; echo $row['answer']; echo "</td>";
     echo "<td>"; echo 'edit'; echo "</td>";
       echo "<td>"; echo'delete'; echo "</td>";
   echo "</tr>";
       }
      }
*/
}
?>

               
             </table>             
            
            
        </div>
     </div>
</form>

</div>



</body>

</html>