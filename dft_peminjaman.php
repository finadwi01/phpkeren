<html>
<head>
<?php include("dbcon.php"); ?>
<hr>
</head>
<body>


<form action="" method="post">
<br></br>
<h3>Daftar Peminjaman</h3>
<table border='1'>
<thead>
<tr><td>Id Peminjaman</td>
	<td>Nama Peminjam</td>
	<td>Judul Buku</td>
	<td>Tanggal Peminjaman</td>
	<td>Batas Peminjaman</td>
	<td>Aksi</td>
</tr>
</thead>
<tbody>
<?php include("dbcon.php");
	$kueri=mysql_query("select a.id_peminjaman, b.nama,c.judul_buku,a.tgl_peminjaman,a.bts_pengembalian,a.status from peminjaman a, peminjam b,buku c where a.id_peminjaman=a.id_peminjaman and a.id_peminjam=b.id_peminjam and a.id_buku=c.id_buku and status='1' ")or die(mysql_error());
	while($row=mysql_fetch_array($kueri)){?>
	<tr>
	<td><?php echo $row['id_peminjaman'];?></td>
	<td><?php echo $row['nama'];?></td>
	<td><?php echo $row['judul_buku'];?></td>
	<td><?php echo $row['tgl_peminjaman'];?></td>
	<td><?php echo $row['bts_pengembalian'];?></td>

	<td><a href="tambah_pengembalian.php?kode=<?php echo $row['id_peminjaman']?>">kembali</a>
	</td>
	</tr>
	<?php
	}?>
</tbody>
</table>
</form>
</body>
</html>
