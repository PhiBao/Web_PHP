<?php
$myIDPB = $_POST['IDPB'];
$Tenpb = $_POST['TenPhongBan'];
$myMota = $_POST['MoTa'];

include "../util/MySQLConnection.php";

$sql = "INSERT INTO PHONGBAN
VALUES ('$myIDPB','$Tenpb','$myMota')";
$rs = mysqli_query($link, $sql);
header("Location:/department");
?>