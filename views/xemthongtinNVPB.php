<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8' />
    <title>Thông tin Nhân viên phòng ban</title>
    <link rel="stylesheet" href="../public/css/style.css" />
</head>

<body>
    <?php
    $mapb = $_REQUEST['IDPB'];
    include "../util/MySQLConnection.php";
    if ($mapb == "0")
        $rs = mysqli_query($link, "SELECT * FROM nhanvien");
    else {
        $rs = mysqli_query($link, "SELECT * FROM nhanvien WHERE IDPB ='$mapb'");
    }
    echo '<Table border="1" width="100%">';
    echo '<caption>Dữ liệu Nhân viên của ' . $mapb . '</caption>';
    echo '<TR><TH>IDNV</TH><TH>Họ tên</TH><TH>IDPB</TH><TH>Địa chỉ</TH></TR>';
    while ($row_rs = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
        echo '<TR><TD>' . $row_rs['IDNV'] . '</TD><TD>' . $row_rs['Hoten'] . '</TD><TD>' . $row_rs['IDPB'] .
            '</TD><TD>' . $row_rs['Diachi'] . '</TD></TR>';
    }
    echo '</Table>';
    mysqli_free_result($rs);
    mysqli_close($link);
    ?>
    <form><a href="xemthongtinPB.php"><INPUT type="button" value="Back"></a></form>
</body>

</html>