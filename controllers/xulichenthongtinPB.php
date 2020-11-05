<?php
$myIDPB = $_POST['txtIDPB'];
$Tenpb = $_POST['txtTenpb'];
$myMota = $_POST['txtMota'];

include "../util/MySQLConnection.php";

$sql = "INSERT INTO PHONGBAN
VALUES ('$myIDPB','$Tenpb','$myMota')";
$rs = mysqli_query($link, $sql);
header("Location:../views/chenthongtinPB.php");
?>