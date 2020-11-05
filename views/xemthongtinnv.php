<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset='utf-8' />
	<title>Thông tin Nhân viên</title>
	<link rel="stylesheet" href="../public/css/style.css" />
</head>

<body>
	<?php
	include "../util/MySQLConnection.php";
	$rs = mysqli_query($link, "SELECT * FROM nhanvien");
	echo '<table border ="1" width = "100%">';
	echo '<caption>Dữ liệu bảng Nhân viên</caption>';
	echo '<TR><TH>IDNV</TH><TH>Họ tên</TH><TH>IDPB</TH><TH>Địa chỉ</TH></TR>';
	while ($row_rs = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
		echo '<TR><TD>' . $row_rs['IDNV'] . '</TD><TD>' . $row_rs['Hoten'] . '</TD><TD>'
			. $row_rs['IDPB'] . '</TD><TD>' . $row_rs['Diachi'] . '</TD></TR>';
	}
	echo '</Table>';
	mysqli_free_result($rs);
	mysqli_close($link);
	?>
</body>

</html>