<?php
$myIDPB = $_POST['txtIDPB'];
$Tenpb = $_POST['txtTenpb'];
$myMota = $_POST['txtMota'];
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
$db_select = mysqli_select_db($link, 'DULIEU');
$sql = "INSERT INTO PHONGBAN
VALUES ('$myIDPB','$Tenpb','$myMota')";
$rs = mysqli_query($link, $sql);
header("Location:chenthongtinPB.php");
?>