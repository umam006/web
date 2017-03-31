<!DOCTYPE html> 
<html> 
<head>  
	<title>Pratikum Pemrograman WEB</title> 
 
</head> 
<body>  
	<?php   
	require 'koneksi.php';  
	session_start();  
	if($_SESSION['username']){  
	echo "Home User, selamat datang : ". $_SESSION['username'];?>   <br>   
	<a href="logout.php">Logout</a> 
 
  <?php 
  } else{     
  header('location: ./login.php');   
  }   
  ?>  
</body>  
</html> 