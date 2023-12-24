<?php
require 'connection.php';
session_start();
?>



<!DOCTYPE html>
<html>
<head>
    <title>APNI DUKAAN</title>   
    <link rel="stylesheet type="text/css" href="mystyle.css">
      <link rel = "icon" href =  "ad.jpg" type = "image/x-icon"> 
      <style type="text/css"> 
  </style>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

</head>
<body>
   
      <?php
require 'header.php';
       ?>
<br>

        <br>
        <br>
        <br>
        <br>
        <br>
<h3>                   <!--table content-->
                <center>MEN</center>
                <br>
<table width="1040" cellpadding="12" cellspacing="24" align = "center">
   
<tr>

    <td width=300 height="300" ><a href="pants.php"><img width="100%" height="100%" src="pants.jpeg">PANTS</a></td> 
    <td width=300 height="300" ><a href="hoody.php"><img width="100%" height="100%" src="hoody.jpg">HOODY</a></td> 
    <td width=300 height="300" ><a href="shirt.php"><img width="100%" height="100%" src="shirt.jpeg">SHIRTS</a></td>    
</tr>
<tr>
    <td width=300 height="300" ><a href="shoe.php"><img width="100%" height="100%" src="shoe.jpeg">SHOES</a></td>  
    <td width=300 height="300" ><a href="watch.php"><img width="100%" height="100%" src="watch.jpeg">WATCHES</a></td> 
    <td width=300 height="300" ><a href="jeans.php"><img width="100%" height="100%" src="jeans.jpg">JEANS</a></td>        
</tr>
</table>
</h3>
</body>
</html>