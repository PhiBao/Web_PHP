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
	echo '<Form action="xulixoathongtinNV.php" method="POST">';
	echo '<table border="1" widTH="100%">';
	echo '<caption>Dữ liệu bảng nhân viên</caption>';
	echo '<TR><TH>IDNV</TH><TH>Họ tên</TH><TH>IDPB</TH><TH>Địa chỉ</TH><TH></TH><TH colspan="2"></TH></TR>';
	$i = 0;
	while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH))
	{
		echo '<TR><TH>' . $row["IDNV"] . '</TH><TH>' . $row["Hoten"] . '</TH><TH>' . $row["IDPB"] . '</TH>
		<TH>' . $row["Diachi"] . '</TH><TH><a HREF="xulixoathongtintinNV.php?IDNV=' . $row["IDNV"] . '">Xoá</a></TH>
		<TH ><input type="checkbox" name="a[]" value="' . $row["IDNV"] . '"></TH>';
		if ($i == 0)
			echo '<TH rowspan=1000><input type="submit" name="xoatatca" value="Xoá tất cả"></TH></TR>';
		$i = 1;
	}
	echo '</table>';
	mysqli_close($link);
	?>
</body>

</html>