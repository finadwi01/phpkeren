<html>
<?php include ("dbcon.php");?>
<head>
<h1>aplikasi penyewaan buku</h1>
<hr>
<br>
</head>	
<body>
<form method="post">

<h4>Input Pengembaian Buku</h4>
<?php include ("dbcon.php");
$id=$_GET['kode'];
	$kueri=mysql_query("select * from peminjaman where id_peminjaman='$id'") or die (mysql_error());
	$row=mysql_fetch_array($kueri);

	?>
<table>
<tr><td>ID Peminjaman</td>
	<td><input type="text" name="id_peminjaman" readonly="" value="<?php echo $row['id_peminjaman'];?>"></td>

<tr><td>Batas Pengembalian</td>
	<td><input name="tgl_pengembalian" value="<?php echo $row['bts_pengembalian']?>" readonly=""></td>
</tr>

<tr><td>Tanggal Pengembalian</td>
	<td><input name="tgl_pengembalian" value="<?php echo date("Y-m-d")?>" readonly=""></td>
</tr>

<tr><td>Denda</td>
	<td><select name="denda" value="">
		<option value="0" >Tidak ada</option>
		<option value="2000">Kurang dari 7 hari</option>
		<option value="8000">Lebih dari 7 hari</option>
	</select></td>
</tr>

<tr><td><input type="submit" name="submit" value="simpan"></td></tr>
</table>
<?php 
include ("dbcon.php");
if (isset($_POST['submit'])){ 

	$id_peminjaman=$_POST['id_peminjaman'];
	$tgl_pengembalian=$_POST['tgl_pengembalian'];
	$denda=$_POST['denda'];

	$kueri1="insert into pengembalian (id_peminjaman,tgl_pengembalian,denda) values('$id_peminjaman','$tgl_pengembalian','$denda')";
	$kueri2="update peminjaman set status='2' where id_peminjaman='$id_peminjaman'";
	$hasil=mysql_query($kueri1)or die(mysql_error());
	if($hasil){
		mysql_query($kueri2)or die(mysql_error());
	}?>
	<script> window.location="peminjaman.php"
	</script>
	<?php

	
}?>
</form>
</body>
</html>

