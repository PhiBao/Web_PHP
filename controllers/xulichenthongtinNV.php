<?php
$myIDNV = $_POST['txtIDNV'];
$Hotennv = $_POST['txtHoten'];
$myIDPB = $_POST['txtIDPB'];
$myDiachi = $_POST['txtDiachi'];
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
$db_select = mysqli_select_db($link, 'DULIEU');
$sql = "INSERT INTO NHANVIEN
VALUES ('$myIDNV','$Hotennv','$myIDPB','$myDiachi')";
$rs = mysqli_query($link, $sql);
header("Location:../views/chenthongtinNV.php");
?>