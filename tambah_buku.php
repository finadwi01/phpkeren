<html>
<head>
<h1>aplikasi penyewaan buku</h1>
<hr>
<br>
</head>	
<body>
<p><h3>Input Data Buku</h3></p>
<form method="post">
<input type="button" value="kembali" onclick="window.location = 'buku.php';"/>

<table>
<tr><td>Kode Buku</td>
	<td><input type="text" name="id_buku" required=""></td>
</tr>

<tr><td>Judul Buku</td>
	<td><input type="text" name="judul_buku" required=""></td>
</tr>

<tr><td>Pengarang</td>
	<td><input type="text" name="pengarang" required=""></td>
</tr>

<tr><td>Penerbit</td>
	<td><input type="text" name="penerbit" required=""></td>
</tr>

<tr><td><input type="submit" name="submit" value="simpan"></td></tr>
</table>
<?php 
include ("dbcon.php");
if (isset($_POST['submit'])){ 
	$id=$_POST['id_buku'];
	$judul_buku=$_POST['judul_buku'];
	$pengarang=$_POST['pengarang'];
	$penerbit=$_POST['penerbit'];

	$kueri=mysql_query("insert into buku values('$id','$judul_buku','$pengarang','$penerbit')")or die(mysql_error());?>
	<script> window.location="buku.php"
	</script>
	<?php

	
}?>
</form>
</body>
</html>