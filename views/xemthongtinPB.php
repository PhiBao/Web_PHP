<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8' />
    <title>Thông tin Phòng ban</title>
    <link rel="stylesheet" href="/../public/css/table.css" />
</head>

<body>
    <section class="container">
        <?php include '_boxLeft.php'; ?>
        <?php include '_boxRight.php'; ?>
        <?php include '_footer.php'; ?>
        <section class="main-content">
            <div>
                <i class="title">Dữ liệu bảng Phòng ban:</i>
            </div>
    <?php
    include "../util/MySQLConnection.php";
    $rs = mysqli_query($link, "SELECT * FROM phongban");
    echo '<table class="table">';
    echo '<TR class="table-header"><TH class="header-item">Mã phòng ban</TH><TH class="header-item">Tên phòng ban</TH><TH class="header-item">Mô tả</TH><TH class="header-item"></TH></TR>';
    while ($row_rs = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
        echo '<TR class="table-row"><TD class="table-data">' . $row_rs['IDPB'] . '</TD><TD class="table-data">' . $row_rs['Tenpb'] . '</TD><TD class="table-data">' . $row_rs['Mota'] .
            '</TD><TD class="table-data"><a class="button" href="/detail/department/' . $row_rs['IDPB'] . '">Xem</a></TD></TR>';
    }
    echo '</table>';
    mysqli_free_result($rs);
    mysqli_close($link);
    ?>
        </section>
    </section>
</body>

</html>