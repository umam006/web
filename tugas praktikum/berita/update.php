<!DOCTYPE html> 
<html> 
<head>  
	<title>CRUD PHP</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">   
<?php   
require 'koneksi.php';    
if (isset($_POST['submit'])) {   
$berita_id    = $_POST['berita_id'];   
$berita_judul  = $_POST['berita_judul'];   
$berita_headline  = $_POST['berita_headline'];   
$berita_isi   = $_POST['berita_isi'];   
$berita_author  = $_POST['berita_author'];   
$berita_tanggal  = date('Y-m-d H:i:s'); 
$query   = $conn->query("UPDATE berita SET berita_judul='$berita_judul', berita_headline='$berita_headline', berita_isi='$berita_isi', berita_author='$berita_author', berita_tanggal='$berita_tanggal' WHERE berita_id='$berita_id'");   
	if($query){    
			header('location: ./read.php');   
		} else{    
			echo "Gagal UPDATE";   
		}  
	} 
 
 	if (isset($_GET['berita_id'])) {   
 	$berita_id = $_GET['berita_id'];  
 	$query = $conn->query("SELECT * FROM berita WHERE berita_id = '$berita_id'");   
 	$hasil = mysqli_fetch_array($query);     
?> 
 
 
</head>  
<body>  
	
<div id="kotak">
		<div id="atas"> 
			Edit Data Berita
		</div>
	<div id="bawah"> 
	<form method="POST">   
		   
			<input type="hidden" name="berita_id" value="<?php echo $hasil[0] ?>">
			<br>
			<input class="masuk" type="text" placeholder="Judul Berita" name="berita_judul" value="<?php echo $hasil[1] ?>">  
		   	<br>
			
			<input class="masuk" type="text" placeholder="Headline Berita" name="berita_headline" value="<?php echo $hasil[2] ?>">  
		   	<br>
			
			<textarea class="masukisi" placeholder="Isi Berita" name="berita_isi" ></textarea>  
		  	<br> 
			
			<input class="masuk" placeholder="Penulis Berita" type="text" name="berita_author" value="<?php echo $hasil[4] ?>">  
		  	
			<input id="tombol" type="submit" name="submit" value="UPDATE">  
	<?php }?>  	 
	</form>
	</div>
	</div>  
</body>  
</html>
