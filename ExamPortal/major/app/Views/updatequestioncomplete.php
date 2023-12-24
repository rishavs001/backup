<?php
 $db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
if (isset($_POST['update_btn']))
{ 
    //$question_no=$_POST['question_no'];

   $question=$_POST['question'];
    $opt1=$_POST['opt1'];
    $opt2=$_POST['opt2'];
    $opt3=$_POST['opt3'];
    $opt4=$_POST['opt4'];
    $answer=$_POST['answer'];
    $qid=$_POST['qid'];
  
   /* $q="UPDATE sub1
SET question_no=$question_no, question='$question',opt1='$opt1',opt2='$opt2',opt3='$opt3',opt4='$opt4',answer='$answer'
WHERE question_no='$question_no';"
       mysqli_query($db,$q);
       mysqli_close($db);*/

  $q="UPDATE questions
SET  question='$question',opt1='$opt1',opt2='$opt2',opt3='$opt3',opt4='$opt4',answer='$answer'
WHERE qid='$qid'";
       mysqli_query($db,$q);
       mysqli_close($db);
 // return redirect('adminportal');
    //   $routes->setDefaultController('Home');
  //$this->load->view('adminportal');
 //echo site_url('adminportal');
 //redirect('adminportal', 'refresh');
// redirect(site_url('adminportal'));
              echo '<script>alert("QUESTION UPDATED")
   window.location.href= "edit_option";</script>';

}
?>