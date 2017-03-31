<!DOCTYPE html> 
<html> 
	<head>  
		<title>Pratikum Pemrograman WEB</title>

<link rel="stylesheet" href="css/login.css"/>

<script type="text/javascript">
  function validasi_input(form){
    if (form.username.value == ""){
      alert("Username masih kosong!");
      form.username.focus();
      return (false);
    }
   return (true);
  }
</script>


	<?php   
	require 'koneksi.php';  
	session_start();  
	if (isset($_POST['submit'])) {   
		$username  = $_POST['username'];   
		$password  = $_POST['password']; 
 
	$query = $conn->query("SELECT * FROM login WHERE username = '$username' LIMIT 1"); 
 
	$hasil = mysqli_fetch_array($query); 
 
  if ($password = $hasil['password']) {    
  	$_SESSION['username'] = $hasil['username'];    
  	if($hasil['privilege'] == 1)
  	{     
  		header('location: ./home_admin.php');    
  		} else{     
  			header('location: ./home_user.php');    
  		}   
  		} else {    
  			echo 'Invalid password.';   }  
  			}  
  	?> 
 </head> 
 <body>  
 	
 	<div id="kotak">
 		<div id="atas">
 			Login
 		</div>
 		
 		<div id="bawah">  
 	<form method="POST" onsubmit="return validasi_input(this)">     
 			  
 			<input class="masuk" id="username" type="text" placeholder="username" name="username">
 		<br>      
 			<input class="masuk" id="password" type="password" placeholder="password" name="password">

 			<input id="tombol" type="submit" name="submit" value="Login">
 		<br>
 		<br>
 		<div class="daftar">
 		Belum Punya Akun?<a href="register.php">Daftar</a>    
 		</div>
 	</form> 
 	</div>  
 	</div>   
 	
 </body> 
 </html> 