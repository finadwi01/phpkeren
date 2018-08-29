<?php include('header.php'); ?>
<?php include('navbar_dashboard.php'); ?>
<div class="container">
<div class="margin-top">
<div class="row">	
<div class="span12">
<div class="alert alert-info" style="border-top-width: 100px"> 
<strong><i class="icon-user icon-large"></i>&nbsp; Tabel kode jenjang</strong>
</div>	

<?php
$date= date("Y-m-d");
$sql="SELECT * FROM wonge where perbaikan_data='$date'";
$kueri=mysql_query($sql)or die(mysql_error());
$row=mysql_fetch_array($kueri);
if(empty($row)){}
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


<?php include('footer.php') ?>