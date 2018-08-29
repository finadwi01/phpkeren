<html>
<head>
<h1>aplikasi penyewaan buku</h1>
<hr>
</head>	
<body>
<form method="post">
<input type="button" value="kembali" onclick="window.location = 'buku.php';"/>
<?php include ("dbcon.php");
$id=$_GET['kode'];
	$kueri=mysql_query("select * from buku where id_buku='$id'") or die (mysql_error());
	$row=mysql_fetch_array($kueri);
	?>

<table border="1">
<p>kode buku <?php echo $row['id_buku']; ?></p>

<tr><td>Judul buku</td>
	<td><input type="text" name="judul_buku" value="<?php echo $row['judul_buku'];?>">
	<input type="hidden" name="id" value="<?php echo $row['id_buku'];?>"></td>
</tr>

<tr><td>Pengarang</td>
	<td><input type="text" name="pengarang" value="<?php echo $row['pengarang'];?>">
</tr>
<tr><td>Penerbit</td>
	<td><input type="text" name="penerbit" value="<?php echo $row['penerbit'];?>">
</tr>

<tr><td><input type="submit" name="submit" value="simpan"></td></tr>
</table>
<?php 
if (isset($_POST['submit'])){ 
	$id=$_POST['id'];
	$judul_buku=$_POST['judul_buku'];
	$pengarang=$_POST['pengarang'];
	$penerbit=$_POST['penerbit'];


	$kueri=mysql_query("update buku set judul_buku='$judul_buku' , pengarang='$pengarang',penerbit='$penerbit' where id_buku='$id'")or die(mysql_error());?>
	<script> window.location="buku.php"
	</script>
	<?php

	
}?>
</form>
</body>
</html>