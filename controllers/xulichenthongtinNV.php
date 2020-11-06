<?php
	$myIDNV = $_POST['IDNV'];
	$Hotennv = $_POST['HoTen'];
	$myIDPB = $_POST['IDPB'];
	$myDiachi = $_POST['DiaChi'];
	include "../util/MySQLConnection.php";
	$sql = "INSERT INTO NHANVIEN
	VALUES ('$myIDNV','$Hotennv','$myIDPB','$myDiachi')";
	$rs = mysqli_query($link, $sql);
	header("Location:/staff");
?>