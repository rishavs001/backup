<?php
	session_start();
	session_destroy();
	unset($_SESSION['username']);
	$_SESSION['message']="you are now logged out";
	//header("location:home.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title> LOGOUT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

   <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	  
<a href="index" ><button type="submit" class="btn float-left reg_btn">LOGOUT </button></a>
</body>
</html>