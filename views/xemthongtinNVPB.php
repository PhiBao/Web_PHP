<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8' />
    <title>Thông tin Nhân viên phòng ban</title>
    <link rel="stylesheet" href="/../public/css/table.css">
</head>

<body>
    <section class="container">
        <?php include '_boxLeft.php'; ?>
        <?php include '_boxRight.php'; ?>
        <?php include '_footer.php'; ?>
        <section class="main-content">
            <div>
                <?php $mapb = $_REQUEST['IDPB']; ?>
                <i class="title">Dữ liệu của <?php echo $mapb ?>:</i>
            </div>
            <?php
                include "../util/MySQLConnection.php";
                if ($mapb == "0")
                    $rs = mysqli_query($link, "SELECT * FROM nhanvien");
                else {
                    $rs = mysqli_query($link, "SELECT * FROM nhanvien WHERE IDPB ='$mapb'");
                }
                echo '<table class="table">';
                echo '<TR class="table-header"><TH class="header-item">IDNV</TH><TH class="header-item">Họ tên</TH><TH class="header-item">IDPB</TH><TH class="header-item">Địa chỉ</TH></TR>';
                while ($row_rs = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                    echo '<TR class="table-row"><TD class="table-data">' . $row_rs['IDNV'] . '</TD><TD class="table-data">' . $row_rs['Hoten'] . '</TD><TD class="table-data">' . $row_rs['IDPB'] .
                        '</TD><TD class="table-data">' . $row_rs['Diachi'] . '</TD></TR>';
                }
                echo '</table>';
                mysqli_free_result($rs);
                mysqli_close($link);
            ?>
        <form><a href="/department"><INPUT class="button" type="button" value="Back"></a></form>
        </section>
    </section>
</body>

</html>