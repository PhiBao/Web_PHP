<?php
	$user = $_POST['User'];
	$pass = $_POST['Pass'];
	if ($user == "" || $pass == "") {
		header("Location:login.php");
	} else {
		$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
		$db_select = mysqli_select_db($link, 'DULIEU');
		$rs = mysqli_query($link, "SELECT * FROM Admin WHERE username='$user' and password='$pass'");
		if (mysqli_num_rows($rs) == 0) {
			header("Location:login.php");
		} else {
            header("Location:capnhat.php");
			mysqli_free_result($rs);
			mysqli_close($link);
		}
	}
?>