<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset='utf-8' />
	<title>Thông tin Nhân viên</title>
	<link rel="stylesheet" href="../css/makeUp.css" />
</head>

<body>
	<?php
	$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
	$db_select = mysqli_select_db($link, 'DULIEU');
	$rs = mysqli_query($link, "SELECT * FROM nhanvien");
	echo '<table border ="1" width = "100%">';
	echo '<caption>Dữ liệu bảng Nhân viên</caption>';
	echo '<TR><TH>IDNV</TH><TH>Họ tên</TH><TH>IDPB</TH><TH>Địa chỉ</TH><TH><a href="xulixoatatca.php">Xoá tất cả</a></TH></TR>';
	while ($row_rs = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
		echo '<TR><TD>' . $row_rs['IDNV'] . '</TD><TD>' . $row_rs['Hoten'] . '</TD><TD>'
            . $row_rs['IDPB'] . '</TD><TD>' . $row_rs['Diachi']
            . '</TD><TD><a href ="xulixoathongtinNV.php?IDNV=' . $row_rs['IDNV']
            . '"><INPUT TYPE="Checkbox" name="delete" id="delete" value="delete" /><label for"delete">Xoá</label><TD><TR>';
	}
	echo '</Table>';
	mysqli_free_result($rs);
	mysqli_close($link);
	?>
</body>

</html>