<?php
session_start();
if(isset($_SESSION["Username"]))
	{
		header("location:logout.php");
		echo "Xin chao ".$_SESSION["Username"];
	}
else if(isset($_POST['submit']))

	{
			if(empty($_POST['Username']) or empty($_POST['Password']))
			{
				$warn = "Bạn phải điền đầy đủ tên đăng nhập và mật khẩu";
			}
			else
			{
				$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
                $db_select = mysqli_select_db($link, 'DULIEU');
				$user = mysqli_real_escape_string($link, $_POST['Username']);
				$pass = mysqli_real_escape_string($link, $_POST['Password']);
				$query = " SELECT * FROM admin where username = '$user' and password = '$pass' ";
				$rs = mysqli_query($link, $query);
				if(mysqli_num_rows($rs)==1)
				{
					$row = mysqli_fetch_array($rs);

					echo "bạn đã đăng nhập thành công ";
					$_SESSION["Username"] = $row['username'];
					header("location: logout.php");
					echo "Xin chào ".$_SESSION["Username"];
				}
			}
	}
?>