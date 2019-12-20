<?php
session_start();

if (isset($_POST['logout'])) {
    unset($_SESSION['Username']);
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Đăng xuất</title>
    <link rel="stylesheet" href="../css/makeUp.css" />
</head>
<body>
    <?php echo "<h2>Xin chào " . $_SESSION['Username'] . "</h2>";
    echo "<h3>Chào mừng bạn đến với hệ thống quản lí nhân viên!</h3>"; ?>
    <form name="fLogout" method="post" action="logout.php" align="center">
        <table>
            <tr>
                <td rowspan="5" colspan="5"><input type="submit" name="logout" value="Đăng xuất" align="Right"></td>
            </tr>
        </table>
    </form>
</body>

</html>