<!DOCTYPE html>
<html>
<head>
	<title>PRAKTIKUM PEMROGAMAN WEB</title>

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

<script type="text/javascript">
  function validasi_input(form){
    if (form.password.value == ""){
      alert("Username masih kosong!");
      form.username.focus();
      return (false);
    }
   return (true);
  }
</script>

<script type="text/javascript">
  function validasi_input(form){
    if (form.privileges.value == ""){
      alert("Username masih kosong!");
      form.username.focus();
      return (false);
    }
   return (true);
  }
</script>

	<?php  
require 'koneksi.php'; 
if (isset($_POST['submit'])) 
	{	$username  = $_POST['username'];  
		$password  = $_POST['password'];  
		$privileges = $_POST['privileges']; 
 
	$query = $conn->query("INSERT into login VALUES('','$username','$password','$privileges')");         
	if($query){          
		header('location: ./login.php');         
		} else{          
			echo "Gagal register";         
		} 
		 }  
	?>
</head>
<body>
	<div id="kotak1">
 		<div id="atas">
 			REGISTER
 		</div>
 		
 		<div id="bawah">  
 	<form method="POST" onsubmit="return validasi_input(this)">     
 			  
 			<input class="masuk" id="username" type="text" placeholder="username"name="username">
 		<br>      
 			<input class="masuk" id="password" type="password" placeholder="password" name="password">
 		<br>	
 			<select class="masuk1" name="privileges">    
				<option disabled selected>--Pilih Hak Akses--</option>    
				<option value="1">Admin</option>    
				<option value="0">User Biasa</option>    
					</select> 

 			<input id="tombol" type="submit" name="submit" value="REGISTER">

 
 	</form> 
 	</div>  
 	</div>
</body>
</html>
    