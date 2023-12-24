<?php
session_start();
$db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));

$list=$_POST;
//print_r($list);
echo "<br>";
$right=0;
$wrong=0;
$no_attempt=0;
foreach ($list as $key => $value) {
//echo $value . " in " . $key . ", ";
     echo "qid= $key" ;?> &nbsp;&nbsp;&nbsp; <?php
      echo "choosen answer= $value" ;
     echo "<br>";
if ($value!="no_attempt") 
{

     $q="SELECT * FROM questions WHERE qid='$key'";
     
       $result=mysqli_query($db,$q);
    
        while ($row= mysqli_fetch_array($result)) 
        {
          //echo $row['qid'];
    echo "<br>";
          if ($value==$row['answer'])
          {
            $right++;
            
            echo "<br>";
          }
          else
          {
            $wrong++;
            
            echo "<br>";
          }
        }
}
else
{
  $no_attempt++;
}
}
echo "<br>";echo "<br>";
echo "right=$right";echo "<br>";
echo "wrong=$wrong";echo "<br>";
echo "no_attempt=$no_attempt";echo "<br>";
?>