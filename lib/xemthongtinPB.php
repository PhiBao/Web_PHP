<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8' />
    <title>Thông tin Phòng ban</title>
    <link rel="stylesheet" href="../css/makeUp.css" />
</head>

<body>
    <?php
    $link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
    $db_select = mysqli_select_db($link, 'DULIEU');
    $rs = mysqli_query($link, "SELECT * FROM phongban");
    echo '<table border ="1" width = "100%">';
    echo '<caption>Dữ liệu bảng Phòng ban</caption>';
    echo '<TR><TH>Mã phòng ban</TH><TH>Tên phòng ban</TH><TH>Mô tả</TH><TH></TH></TR>';
    while ($row_rs = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
        echo '<TR><TD>' . $row_rs['IDPB'] . '</TD><TD>' . $row_rs['Tenpb'] . '</TD><TD>' . $row_rs['Mota'] .
            '</TD><TD align ="center"><a href="xemthongtinNVPB.php?IDPB=' . $row_rs['IDPB'] . '">Xem</a></TD></TR>';
    }
    echo '</Table>';
    mysqli_free_result($rs);
    mysqli_close($link);
    ?>
</body>

</html>