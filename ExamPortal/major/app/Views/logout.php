<?php
	session_start();
	session_destroy();
	unset($_SESSION['username']);
	$_SESSION['message']="you are now logged out";
	//header("location:home.php");
	 ?>
            <script type="text/javascript">
            	window.location.href= "http://localhost/major/public/";
            </script>
            <?php
?>
