<?php
session_start();
$db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
$id=$_GET['id'];
//echo "$id";
//$q="DELETE FROM sub1 WHERE quesion_no='$id'";
 
mysqli_query($db,"DELETE FROM questions WHERE qid='$id'") or die('Error');
echo '<script>alert("QUESTION DELETED")
   window.location.href= "edit_option";</script>';
    

    
?>