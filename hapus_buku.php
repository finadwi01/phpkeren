<?php

include("dbcon.php");
$id=$_GET['kode'];
$kueri=mysql_query("delete from buku where id_buku='$id'") or die (mysql_error());
if ($kueri) {
echo "<script>alert('data berhasil dihapus');
document.location.href='buku.php'</script>\n";
} else {
echo "<script>alert('data gagal dihapus');
document.location.href='buku.php'</script>\n";
}

?>