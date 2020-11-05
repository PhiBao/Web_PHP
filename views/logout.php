<?php
session_start();
if (!isset($_SESSION['Username'])) {
  header("Location:login.php");
}

if (isset($_POST['logout'])) {
    unset($_SESSION['Username']);
    
    echo '<script>parent.window.location.reload(true);</script>';
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Đăng xuất</title>
    <link rel="stylesheet" href="../public/css/style.css" />
</head>
<body>

    <?php 
        echo "<h2>Xin chào ";   
        if (isset($_SESSION['Username'])) echo $_SESSION['Username'], "</h2>";
        echo "<h3>Chào mừng bạn đến với hệ thống quản lí nhân viên!</h3>";
    ?>
    <form name="Logout" method="post" align="center">
        <table>
            <tr>
                <td rowspan="5" colspan="5"><input type='submit' name="logout" value="Đăng xuất" align="Right"></td>
            </tr>
        </table>
    </form>
</body>

</html>