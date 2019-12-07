<?php
$tenpb = $_POST['txtTenpb'];
$myID = $_REQUEST['IDPB'];
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
$db_select = mysqli_select_db($link, 'DULIEU');
$rs = mysqli_query($link, "UPDATE PhongBan SET Tenpb = '$tenpb' WHERE IDPB = '$myID'");
header("Location:capnhat.php");
?>