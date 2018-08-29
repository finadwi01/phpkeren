<html>
<head>
<hr></hr>
</head>
<body>
<form>
<br></br>
<p><h3 align="center">Laporan Peminjaman</h3></p>
<table border='1' align="center">
<thead>
<tr><td>Id Peminjaman</td>
	<td>Nama Peminjam</td>
	<td>Kode Buku</td>
	<td>Judul Buku</td>
	<td>Tanggal Peminjaman</td>
</tr>
</thead>
<tbody>
<?php include("dbcon.php");

	$bulan = $_POST['bulan'];
	$tahun= $_POST['tahun'];

	$kueri=mysql_query("select a.id_peminjaman, b.nama,c.id_buku,c.judul_buku,a.tgl_peminjaman,a.bts_pengembalian,a.status from peminjaman a, peminjam b,buku c where a.id_peminjaman=a.id_peminjaman and a.id_peminjam=b.id_peminjam and a.id_buku=c.id_buku and year(tgl_peminjaman)='$tahun' and month(tgl_peminjaman)='$bulan' ")or die(mysql_error());
	while($row=mysql_fetch_array($kueri)){?>
	<tr>
	<td><?php echo $row['id_peminjaman'];?></td>
	<td><?php echo $row['nama'];?></td>
	<td><?php echo $row['id_buku'];?></td>
	<td><?php echo $row['judul_buku'];?></td>
	<td><?php echo $row['tgl_peminjaman'];?></td>
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