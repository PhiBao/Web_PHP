<?php
    $IDNV=$_REQUEST["IDNV"];
	include "../util/MySQLConnection.php";
	$sql="DELETE FROM nhanvien WHERE IDNV='$IDNV'";
    $rs=mysqli_query($link,$sql);

	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_POST['a'])){
			foreach($_POST['a'] as $v){
				$IDNV=$v;
				$sql="DELETE FROM nhanvien WHERE IDNV='$IDNV'";
				$rs=mysqli_query($link,$sql);
			}
		}
	}
	header("location:../views/xoathongtinNV.php");
	mysqli_close($link);
?>