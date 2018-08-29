<html>
<head>
<h1>aplikasi penyewaan buku</h1>
<hr>
</head>
<body>

<a href="index.php">Beranda</a>
<a href="buku.php">Data Buku</a>
<a href="peminjam.php">Data Peminjam</a>
<a href="peminjaman.php">Peminjaman</a>
<a href="pengembalian.php">Pengembalian</a>
<a href="laporan_peminjaman.php">Laporan Peminjaman</a>
<a href="laporan_pengembalian.php">Laporan Pengembalian</a>


<form action="" method="post">
<br></br>
<h3>Daftar Pengembalian</h3>
<p><a href="dft_peminjaman.php">+tambah</a></p>
<table border='1'>
<thead>
<tr><td>Id Pengembalian</td>
	<td>Id Peminjaman</td>
	<td>Tanggal Pengembalian</td>
	<td>Denda</td>
</tr>
</thead>
<tbody>
<?php include("dbcon.php");
	$kueri=mysql_query("select * from pengembalian")or die(mysql_error());
	while($row=mysql_fetch_array($kueri)){?>
	<tr>
	<td><?php echo $row['id_pengembalian'];?></td>
	<td><?php echo $row['id_peminjaman'];?></td>
	<td><?php echo $row['tgl_pengembalian'];?></td>
	<td><?php echo $row['denda'];?></td>
	</tr>
	<?php
	}?>
</tbody>
</table>
</form>
</body>
</html>
