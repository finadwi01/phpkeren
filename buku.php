<html>
<body>
<form action="" method="post">

<a href="index.php">Beranda</a>
<a href="buku.php">Data Buku</a>
<a href="peminjam.php">Data Peminjam</a>
<a href="peminjaman.php">Peminjaman</a>
<a href="pengembalian.php">Pengembalian</a>
<a href="laporan_peminjaman.php">Laporan Peminjaman</a>
<a href="laporan_pengembalian.php">Laporan Pengembalian</a>


<br></br>
<h3>Data Buku</h3>
<p><a href="tambah_buku.php">+tambah data</a></p>
<table border='1'>
<thead>
<tr><td>kode buku</td>
	<td>nama buku</td>
	<td>pengarang</td>
	<td>penerbit</td>
	<td>aksi</td>
</tr>
</thead>
<tbody>
<?php include("dbcon.php");
	$kueri=mysql_query("select * from buku")or die(mysql_error());
	while($row=mysql_fetch_array($kueri)){?>
	<tr>
	<td><?php echo $row['id_buku'];?></td>
	<td><?php echo $row['judul_buku'];?></td>
	<td><?php echo $row['pengarang'];?></td>
	<td><?php echo $row['penerbit'];?></td>
	<td><a href="edit_buku.php?kode=<?php echo $row['id_buku']?>">edit</a>
		<a href="hapus_buku.php?kode=<?php echo $row['id_buku']?>">hapus</a>
	</td>
	</tr>
	<?php
	}?>
</tbody>
</table>
</form>
</body>
</html>
