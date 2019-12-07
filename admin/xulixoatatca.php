<?php
$myID = $_REQUEST['IDNV'];
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
$db_select = mysqli_select_db($link, 'DULIEU');
$rs = mysqli_query($link, "DELETE FROM nhanvien WHERE IDNV = '$myID'");
header("Location:xoathongtinNV.php");
?>