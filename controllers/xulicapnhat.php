<?php
$tenpb = $_POST['txtTenpb'];
$myID = $_REQUEST['IDPB'];
include "../util/MySQLConnection.php";
$rs = mysqli_query($link, "UPDATE PhongBan SET Tenpb = '$tenpb' WHERE IDPB = '$myID'");
header("Location:../views/capnhat.php");
?>