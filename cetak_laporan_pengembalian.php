<html>
<head>
<hr></hr>
</head>
<body>
<form>
<br></br>
<p><h3 align="center">Laporan Pengembalian</h3></p>
<table border='1' align="center">
<thead>
<tr><td>ID Pengembalian</td>
	<td>ID Peminjaman</td>
	<td>Kode Buku</td>
	<td>Judul Buku</td>
	<td>Tanggal Peminjaman</td>
	<td>Tanggal pengembalian</td>
</tr>
</thead>
<tbody>
<?php include("dbcon.php");

	$bulan = $_POST['bulan'];
	$tahun= $_POST['tahun'];

	$kueri=mysql_query("select a.id_pengembalian, b.id_peminjaman,c.id_buku, c.judul_buku,b.tgl_peminjaman, a.tgl_pengembalian from pengembalian a, peminjaman b, buku c where a.id_pengembalian=a.id_pengembalian and b.id_buku= c.id_buku and a.id_peminjaman=b.id_peminjaman and year(tgl_pengembalian)='$tahun' and month(tgl_pengembalian)='$bulan' ")or die(mysql_error());
	while($row=mysql_fetch_array($kueri)){?>
	<tr>
	<td><?php echo $row['id_pengembalian'];?></td>
	<td><?php echo $row['id_peminjaman'];?></td>
	<td><?php echo $row['id_buku'];?></td>
	<td><?php echo $row['judul_buku'];?></td>
	<td><?php echo $row['tgl_peminjaman'];?></td>
	<td><?php echo $row['tgl_pengembalian'];?></td>
	</tr>
	<?php
	}?>
</tbody>
</table>




</form>
</body>
</html>
<script>
window.print();
</script>