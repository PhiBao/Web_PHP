<?php
	$tenpb = $_POST['TenPhongBan'];
	$myID = $_POST['IDPB'];
	$moTa = $_POST['MoTa'];
	include "../util/MySQLConnection.php";
	$rs = mysqli_query($link, "UPDATE PhongBan SET Tenpb = '$tenpb', Mota = '$moTa' WHERE IDPB = '$myID'");
	header("Location:/update");
?>