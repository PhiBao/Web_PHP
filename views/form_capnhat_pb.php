<?php
$myID = $_REQUEST['IDPB'];
include "../util/MySQLConnection.php";
$rs = mysqli_query($link, "SELECT * FROM PhongBan WHERE IDPB='$myID'");
$row_rs = mysqli_fetch_array($rs, MYSQLI_BOTH)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8' />
    <title>Cập nhật thông tin phòng ban</title>
    <link rel="stylesheet" href="../public/css/style.css" />
</head>

<body>
    <form action='../controllers/xulicapnhat.php?IDPB=<?php echo $row_rs['IDPB'] ?>' method='post'>
        <table width="300" align="center" border="center">
            <tr>
                <td align="center">IDPB</td>
                <td><?php echo $myID ?></td>
            </tr>
            <tr>
                <td>Tên phòng ban</td>
                <td> <input type="text" size='20' name="txtTenpb" /></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <form id="form" name="form" method="post" action='../controllers/xulicapnhat.php?IDPB=<?php echo $row_rs['IDPB'] ?>'>
                        <input type="submit" name="Ok" id="Ok" value="Ok" />
                        <input type="reset" name="Reset" id="Reset" value="Reset" />
                        <input type="button" name="Exit" id="Exit" value="Exit" />
                    </form>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>