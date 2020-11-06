<?php
session_start();

if (!isset($_SESSION['Username'])) {
  header("Location:/home");
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
    <title>Chào mừng!</title>
    <link rel="stylesheet" href="/../public/css/form.css" />
</head>
<body>
    <section class="container">
        <?php include '_boxLeft.php'; ?>
        <?php include '_boxRight.php'; ?>
        <?php include '_footer.php'; ?>
        <section class="main-content">
        <?php   
            if (isset($_SESSION['Username']))
            echo '<h3 class="title">Chào mừng ' . $_SESSION['Username'] . ' đến với hệ thống quản lí nhân viên!</h3>';
        ?>
        <form name="logout" method="post">
            <input id="right" class="button" type='submit' name="logout" value="Đăng xuất">
        </form>
        </section>
    </section>
</body>

</html> 