<html>
<?php include ("dbcon.php");?>
<head>
<h1>aplikasi penyewaan buku</h1>
<hr>
<br>
</head>	
<body>
<form method="post">
<table>
<h4>Input Peminjaman</h4>
<tr><td>Nama Peminjam</td>
	<td><select name="id_peminjam" >
				<option value="" ></option>
				 <?php
				 $a="SELECT * FROM peminjam";
				 $sql=mysql_query($a);
				 while($data=mysql_fetch_array($sql)){
				 ?>
				 <option value="<?php echo $data['id_peminjam']?>"><?php echo $data['nama']?></option>
				 <?php
				 }
				 ?>
				 </select>
				 </td>
</tr>

<tr><td>Buku yang dipinjam</td>
	<td><select name="id_buku" >
				<option value="" ></option>
				 <?php
				 $a="SELECT * FROM buku";
				 $sql=mysql_query($a);
				 while($data=mysql_fetch_array($sql)){
				 ?>
				 <option value="<?php echo $data['id_buku']?>"><?php echo $data['judul_buku']?></option>
				 <?php
				 }
				 ?>
				 </select>
		
	</td>
</tr>


<tr><td></td><td><input type="submit" name="submit" value="simpan">
<input type="button" value="batal" onclick="window.location = 'peminjaman.php';"></td></tr>
</table>
</form>

<?php 
include ("dbcon.php");
if (isset($_POST['submit'])){ 

	$id_peminjam=$_POST['id_peminjam'];
	$id_buku=$_POST['id_buku'];
	$tgl_peminjaman=date("Y-m-d");
	$batas_hari=mktime(0,0,0,date("n"),date("j")+7,date("Y"));
	$bts_pengembalian=date("Y-m-d", $batas_hari);

	$kueri=mysql_query("insert into peminjaman (id_peminjam, id_buku, tgl_peminjaman
	,bts_pengembalian,status) values('$id_peminjam','$id_buku','$tgl_peminjaman','$bts_pengembalian','1')")or die(mysql_error());?>
	<script> window.location="peminjaman.php"
	</script>
	<?php

	
}?>
</body>
</html>

