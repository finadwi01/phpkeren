<html>
<head>
<h1 align="center" >Aplikasi penyewaan buku</h1>
<hr></hr>
</head>


<body>
<form action="cetak_laporan_pengembalian.php" method="post">
<br></br>
<h5 align="center">Silahkan pilih laporan pengembalian</h5>
<table align="center">
<tr><td>Bulan</td>
	<td><select name="bulan">
	<option value="01">Januari</option>
	<option value="02">Februari</option>
	<option value="03">Maret</option>
	<option value="04">April</option>
	<option value="05">Mei</option>
	<option value="06">Juni</option>
	<option value="07">Juli</option>
	<option value="08">Agustus</option>
	<option value="09">September</option>
	<option value="10">Oktober</option>
	<option value="12">November</option>
	<option value="12">Desember</option>
	</select></td>
</tr>

<tr><td>Tahun</td>
<td><select name="tahun">
<?php
$mulai= date('Y') - 50;
for($i = $mulai;$i<$mulai + 100;$i++){
    $sel = $i == date('Y') ? ' selected="selected"' : '';
    echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
}
?>
</select>
</td></tr>
<tr><td><input type="submit" name="submit" value="cetak"></td>	
</table>

</form>
</body>
</html>