<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset='utf-8' />
	<title>Kết quả tìm kiếm</title>
	<link rel="stylesheet" href="/../public/css/table.css" />
</head>

<body>
	<section class="container">
    <?php include '_boxLeft.php' ?>
    <?php include '_boxRight.php' ?>
    <?php include '_footer.php' ?>
    <section class="main-content">
    	<?php $manv = $_REQUEST['IDNV']; ?>
      <h1 class="title">DỮ LIỆU NHÂN VIÊN <?php echo $manv ?>:</h1>
	<?php

	include "../util/MySQLConnection.php";
	$rs = mysqli_query($link, "SELECT * FROM nhanvien WHERE IDNV='$manv'");
	if (mysqli_num_rows($rs) == 0) {
		header("Location:/search");
	} else {
		echo '<table class="table">';
		echo '<TR class="table-header"><TH class="header-item">Mã nhân viên</TH><TH class="header-item">Họ tên</TH><TH class="header-item">Mã phòng ban</TH><TH class="header-item">Địa chỉ</TH></TR>';
		while ($row_rs = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
			echo '<TR class="table-row"><TD class="table-data">' . $row_rs['IDNV'] . '</TD><TD class="table-data">' . $row_rs['Hoten']
				. '</TD><TD class="table-data">' . $row_rs['IDPB'] . '</TD><TD class="table-data">' . $row_rs['Diachi'] . '</TD></TR>';
		}
		echo '</Table>';
		mysqli_free_result($rs);
		mysqli_close($link);
	}
	?>
			<form><a href="/search"><INPUT class="button" type="button" value="Back"></a></form>
        </section>
    </section>
</body>

</html>