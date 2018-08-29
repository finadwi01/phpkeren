<html>
<head>
<?php include("dbcon.php");?>
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



<br></br>
<h3>Data Peminjam</h3>
<form action="" method="post">
<p><a href="tambah_peminjam.php">+tambah peminjam</a></p>
<table border='1'>
<thead>
<tr><td>Id Peminjam</td>
	<td>Nama Peminjam</td>
	<td>Alamat</td>
	<td>No hp</td>
	<td>aksi</td>
</tr>
</thead>
<tbody>
<?php include("dbcon.php");
	$kueri=mysql_query("select * from peminjam ORDER BY nama  Desc")or die(mysql_error());
	while($row=mysql_fetch_array($kueri)){?>
	<tr>
	<td><?php echo $row['id_peminjam'];?></td>
	<td><?php echo $row['nama'];?></td>
	<td><?php echo $row['alamat'];?></td>
	<td><?php echo $row['no_hp'];?></td>
	<td><a href="edit_peminjam.php?kode=<?php echo $row['id_peminjam']?>">edit</a>
		<a href="hapus_peminjam.php?kode=<?php echo $row['id_peminjam']?>">hapus</a>
	</td>
	</tr>
	<?php
	}?>
</tbody>
</table>
</form>
</body>
</html>
