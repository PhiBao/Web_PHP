<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8' />
    <title>Chèn thông tin Phòng ban</title>
    <link rel="stylesheet" href="../css/makeUp.css" />
</head>

<body>
    <form action='xulichenthongtinPB.php' method='post'>
        <table width="300" align="center" border="center">
            <th colspan="2">Chèn thông tin Phòng ban</th>
            <tr>
                <td align="center">IDPB</td>
                <td><input type="text" size='20' name="txtIDPB" /></td>
            </tr>
            <tr>
                <td align="center">Tên phòng ban</td>
                <td><input type="text" size='20' name="txtTenpb" /></td>
            </tr>
            <tr>
                <td align="center">Mô tả</td>
                <td><input type="text" size='20' name="txtMota" /></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <form id="form" name="form" method="post"
                    action='xulichenthongtinPB.php'>
                        <input type="submit" name="Add" id="Add" value="Add" />
                        <input type="reset" name="Reset" id="Reset" value="Reset" />
                        <input type="button" name="Exit" id="Exit" value="Exit" />
                    </form>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>