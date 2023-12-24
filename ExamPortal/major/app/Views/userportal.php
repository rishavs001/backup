
<?php
session_start();
if (isset($_SESSION['emailuser'])) {
 $db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title> USER PORTAL </title>
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


<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
      body{
  background-image: url('mylogin.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  height" 100%;
  font-family: "Numans","Serif";

}

label{
  color: hotpink;
  display:block;
  padding: 10px;

}

.container{
  height: 100%;
  align-content: center;


}

.card{
  height :100%;
  margin-top: 60px;
  margin-bottom: auto;
  width: 400px;
  background-color: rgba(0,0,0,0.5);
}

.social_icon span{
  font-size: 40px;
  margin-left: 10px;
  color: #FFC312;

}

.social_icon span:hover{
  color: white;
  cursor: pointer;

}

.card-header h3{
  color: lightcoral;
}

.remember{
  color: white;

}

.remember input{
  width: 20px;
  height: 20px
  margin-left: 15px;
  margin-right: 5px;

}

a{
  color: lightcoral;
    

}

i{
  color: lightcoral;
}
i:hover{
    color:white;
    background-color: black;
}

.login_btn{
  color: black;
  background-color: lightcoral;
  width: 100px;
}

.login_btn:hover{
  color: black;
  background-color: white;

}
.links{
  color: white;
}

.links a{
  margin-left: 10px;
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
  

          </div>

    <div class="container-fluid">
      <br>
    
    
      <br>

       <div class="container">
      <div class="d-flex justify-content-center h-100">
        <div class="card">
        
            <div class="card-header">
              <h3>CHOOSE SUBJECT </h3>
                        
              
            </div>
            <div class="card-body">
              
              <form class="form-horizontal" role="form" method="POST" action="userexamportal">

               <center> <select name="subj">
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
                  <input type="submit" name="login_btn" value="BEGIN TEST" class="btn float-center login_btn">
              
          
         </center>
                        </form>
                        <br>
                      </div>
            
                        <br>

             
         
                        </div>
                    </div>
                
              </div>
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