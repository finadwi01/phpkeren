<html>
<head>
<h1>aplikasi penyewaan buku</h1>
<hr>
</head>	
<body>
<form method="post">
<input type="button" value="kembali" onclick="window.location = 'peminjam.php';"/>

<?php include ("dbcon.php");
$id=$_GET['kode'];
	$kueri=mysql_query("select * from peminjam where id_peminjam='$id'") or die (mysql_error());
	$row=mysql_fetch_array($kueri);
	?>
<table border="1">
<p>ID peminjam : <?php echo $row['id_peminjam']; ?></p>
<tr><td>Nama Peminjam</td>
	<td><input type="text" name="nama" value="<?php echo $row['nama'];?>">
	<input type="hidden" name="id" value="<?php echo $row['id_peminjam'];?>"></td>
</tr>
<tr><td>Alamat</td>
	<td><input type="text" name="alamat" value="<?php echo $row['alamat'];?>"></td>
</tr>
<tr><td>No Handphone</td>
	<td><input type="text" name="no_hp" value="<?php echo $row['no_hp'];?>">
</tr>

<tr><td><input type="submit" name="submit" value="simpan"></td></tr>
</table>
<?php 
if (isset($_POST['submit'])){ 
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$no_hp=$_POST['no_hp'];


	$kueri=mysql_query("update peminjam set nama='$nama' , alamat='$alamat', no_hp='$no_hp' where id_peminjam='$id'")or die(mysql_error());?>
	<script> window.location="peminjam.php"
	</script>
	<?php

	
}?>
</form>
</body>
</html>