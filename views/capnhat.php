<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8' />
    <title>Cập nhật</title>
    <link rel="stylesheet" href="../public/css/style.css" />
</head>

<body>
    <?php
    include "../util/MySQLConnection.php";
    $rs = mysqli_query($link, "SELECT * FROM PhongBan");
    echo '<form action="../controllers/xulicapnhat.php">';
    echo '<table border ="1" width="100%">';
    echo '<caption>Dữ liệu bảng Phòng ban</caption>';
    echo '<TR><TH>Mã phòng ban</TH><TH>Tên phòng ban</TH><TH>Mô tả</TH><TH></TH></TR>';
    while ($row_rs = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
        echo '<TR><TD>' . $row_rs['IDPB'] . '</TD><TD>' . $row_rs['Tenpb']
            . '</TD><TD>' . $row_rs['Mota'] . '</TD><TD><a href ="form_capnhat_pb.php?IDPB=' . $row_rs['IDPB']
            . '">Cập nhật</a><TD><TR>';
    }
    echo '</Table>';
    echo '</form>';
    mysqli_free_result($rs);
    mysqli_close($link);
    ?>
</body>

</html>