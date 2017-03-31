<!DOCTYPE html> 
<html> 
<head>  
	<title>CRUD PHP</title>

<link rel="stylesheet" type="text/css" href="css/custom.css">

<?php   
require 'koneksi.php';  
if (isset($_POST['submit'])) {   
	$berita_judul   = $_POST['berita_judul'];   
	$berita_headline  = $_POST['berita_headline'];   
	$berita_isi   = $_POST['berita_isi'];   
	$berita_author  = $_POST['berita_author'];   
	$berita_tanggal  = date('Y-m-d H:i:s'); 
	$query   = $conn->query("INSERT into berita VALUES('','$berita_judul','$berita_headline','$berita_isi', '$berita_author', '$berita_tanggal')");         

	if($query){          
		header('location: ./read.php');         
	} else{          
			echo "Gagal input";         
		}  
	}   
?> 
</head> 
<body>
	<div id="kotak">
		<div id="atas"> 
			Input Data Berita
		</div>
	<div id="bawah"> 
	<form method="POST">   
		   
			
			<input class="masuk" type="text" placeholder="Judul Berita" name="berita_judul">  
		   	<br>
			
			<input class="masuk" type="text" placeholder="Headline Berita" name="berita_headline">  
		   	<br>
			
			<textarea class="masukisi" placeholder="Isi Berita" name="berita_isi" ></textarea>  
		  	<br> 
			
			<input class="masuk" placeholder="Penulis Berita" type="text" name="berita_author">  
		  	
			<input id="tombol" type="submit" name="submit" value="SIMPAN">  
		 
	</form>
	</div>
	</div> 
</body> 
</html>