<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset='utf-8' />
	<title>Xoá thông tin Nhân viên</title>
	<link rel="stylesheet" href="/../public/css/table.css" />
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
			echo '<Form action="../controllers/xulixoathongtinNV.php" method="POST">';
			echo '<table class="table">';
			echo '<TR class="table-header"><TH class="header-item">IDNV</TH><TH class="header-item">Họ tên</TH><TH class="header-item">IDPB</TH><TH class="header-item">Địa chỉ</TH><TH class="header-item"></TH><TH class="header-item" colspan="2"></TH></TR>';
			$i = 0;
			while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH))
			{
				echo '<TR class="table-row"><TD class="table-data">' . $row["IDNV"] . '</TD><TD class="table-data">' . $row["Hoten"] . '</TD><TD class="table-data">' . $row["IDPB"] . '</TD>
				<TD class="table-data">' . $row["Diachi"] . '</TD><TD class="table-data"><a class="button" href="../controllers/xulixoathongtinNV.php?IDNV=' . $row["IDNV"] . '">Xoá</a></TD>
				<TD class="table-data"><label class="label"><input type="checkbox" name="a[]" value="' . $row["IDNV"] . '"><span class="checkmark"></span></label></TD>';
				if ($i == 0)
					echo '<TD class="table-data" rowspan=1000><input type="submit" name="xoatatca" value="Xoá hàng đã chọn"></TD></TR>';
				$i = 1;
			}
			echo '</table>';
			mysqli_close($link);
			?>
		</section>
    </section>
</body>

</html>