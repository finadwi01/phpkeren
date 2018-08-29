<?php
$date= date("Y-m-d");
$sql="SELECT * FROM wonge where perbaikan_data='$date';
$kueri=mysql_query($sql)or die(mysql_error());
$row=mysql_fetch_array($kueri);
if(empty($row)){
}
    else
    {
    ?>
    <script type="text/JavaScript">
    var answer=confirm("klik ok")
    if (answer)
        window.location="detail_ultah.php";
    </script>
<?php
}
?>
