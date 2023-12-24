<?php
$db=mysqli_connect("localhost","root","","examportal") or die(mysqli_error($db));
?>
/////////////////
  <a href="resultt?total=<?php echo $total ?>&namex=<?php echo $_SESSION['name']; ?>" nam class="btn btn-primary" type="button">OK</a>