<?php
    $IDNV=$_REQUEST["IDNV"];
	$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
	$db_select = mysqli_select_db($link, 'DULIEU');
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
	header("location:xoathongtinNV.php");
	mysqli_close($link);
?>