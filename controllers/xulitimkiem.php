<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset='utf-8' />
	<title>Xử lí tìm kiếm</title>
	<link rel="stylesheet" href="../public/css/style.css" />
</head>

<body>
	<?php
	$manv = $_POST['txtmanv'];
	$hoten = $_POST['txthoten'];
	if ($manv == "" || $hoten == "") {
		header("Location:../views/timkiem.php");
	} else {
		include "../util/MySQLConnection.php";
		$rs = mysqli_query($link, "SELECT * FROM nhanvien WHERE IDNV='$manv' AND Hoten='$hoten'");
		if (mysqli_num_rows($rs) == 0) {
			header("Location:../views/timkiem.php");
		} else {
			echo '<table border ="1" width="100%">';
			echo '<caption>Dữ liệu bảng Nhân viên</caption>';
			echo '<TR><TH>Mã nhân viên</TH><TH>Họ tên</TH><TH>Mã phòng ban</TH><TH>Địa chỉ</TH></TR>';
			while ($row_rs = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
				echo '<TR><TD>' . $row_rs['IDNV'] . '</TD><TD>' . $row_rs['Hoten']
					. '</TD><TD>' . $row_rs['IDPB'] . '</TD><TD>' . $row_rs['Diachi'] . '<TD><TR>';
			}
			echo '</Table>';
			mysqli_free_result($rs);
			mysqli_close($link);
		}
	}
	?>
	<form><a href="../views/timkiem.php"><INPUT type="button" value="Back"></a></form>
</body>

</html>