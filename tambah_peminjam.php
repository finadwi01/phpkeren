<html>
<head>
<h1>aplikasi penyewaan buku</h1>
<hr>
<br>
</head>	
<body>
<form method="GET">
<h4>Input Peminjam</h4>
<table>
<tr><td>Nama Peminjam</td>
	<td><input type="text" name="nama" required=""></td>
</tr>

<tr><td>Alamat</td>
	<td><textarea name="alamat" required=""></textarea>
</tr>

<tr><td>No Hp</td>
	<td><input type="text" name="no_hp" required=""></td>
</tr>


<tr><td></td><td><input type="submit" name="submit" value="simpan">
<input type="button" value="Batal" onclick="window.location = 'peminjam.php'">
</td></tr>
</table>
<?php 
include ("dbcon.php");
if (isset($_GET['submit'])){ 

	$nama=$_GET['nama'];
	$alamat=$_GET['alamat'];
	$no_hp=$_GET['no_hp'];

	$kueri=mysql_query("insert into peminjam (nama, alamat, no_hp)values('$nama','$alamat','$no_hp')")or die(mysql_error());?>
	<script> window.location="peminjam.php"
	</script>
	<?php

	
}?>
</form>
</body>
</html>