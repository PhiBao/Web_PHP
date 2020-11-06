<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset='utf-8' />
	<title>Thông tin Nhân viên</title>
	<link rel="stylesheet" href="/../public/css/table.css"/>
</head>

<body>
	<section class="container">
        <?php include '_boxLeft.php'; ?>
        <?php include '_boxRight.php'; ?>
        <?php include '_footer.php'; ?>
        <section class="main-content">
        	<div>
				<i class="title">Dữ liệu bảng Nhân viên:</i>
			</div>
	<?php
	include "../util/MySQLConnection.php";
	$rs = mysqli_query($link, "SELECT * FROM nhanvien");
	echo '<table class="table">';
	echo '<TR class="table-header"><TH class="header-item">IDNV</TH><TH class="header-item">Họ tên</TH><TH class="header-item">IDPB</TH><TH class="header-item">Địa chỉ</TH</TR>';
	while ($row_rs = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
		echo '<TR class="table-row"><TD class="table-data">' . $row_rs['IDNV'] . '</TD><TD class="table-data">' . $row_rs['Hoten'] . '</TD><TD class="table-data">' . $row_rs['IDPB'] . '</TD><TD class="table-data">' . $row_rs['Diachi'] . '</TD></TR>';
	}
	echo '</Table>';
	mysqli_free_result($rs);
	mysqli_close($link);
	?>
		</section>
    </section>
</body>

</html>