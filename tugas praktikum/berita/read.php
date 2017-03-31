<!DOCTYPE html> 
<html> 
<head>  
	<title>CRUD PHP</title>

<link rel="stylesheet" type="text/css" href="css/custom.css">
</head> 
<body>

<style type="text/css">
  table {
    border-spacing: 0;
    border-collapse: collapse;
    margin: 10px auto 0px auto;
    
}
</style>
<div id="kotak">
<h1>Data Berita</h1> 
	<table border="1"> 
	<tr>  
		<th>No</th>  
		<th>Judul Berita</th>  
		<th>Headline Berita</th>  
		<th>Author</th>  
		<th>Tanggal Post</th>  
		<th>Aksi</th> </tr>  
<?php    
require 'koneksi.php';    
$no = 1;   
$query = $conn->query("SELECT * FROM berita");   
	while ($hasil = mysqli_fetch_array($query)) { 
?>   
	<tr>   
		<td><?php echo $no++; ?></td>   
		<td><?php echo $hasil[1]?></td>   
		<td><?php echo $hasil[2]?></td>   
		<td><?php echo $hasil[4]?></td>   
		<td><?php echo $hasil[5]?></td>   
		<td>   
			<a type="submit" href="update.php?berita_id=<?php echo $hasil[0]?>">Update |    
			<a href="delete.php?berita_id=<?php echo $hasil[0]?>">Delete   
		</td>   
	</tr> 
<?php }?>  
	</table> 
	</div>
</body> 
</html>