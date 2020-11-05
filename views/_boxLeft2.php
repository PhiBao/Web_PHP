<?php
session_start();
if (!isset($_SESSION["Username"])) {
    header("Location: ../views/_boxLeft1.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Box</title>
    <link rel="stylesheet" href="../public/css/style.css" />
</head>

<body>
    <aside class="sidebar">
        <div id="leftside-navigation" class="nano">
            <ul class="nano-content">
                <li>
                    <a href="../views/_trangchu.html" target="T3"><span>Trang chủ</span></a>
                </li>
                <li>
                    <a href="../views/login.php" target="T3"><span>Đăng xuất</span></a>
                </li>
                <li class="sub-menu">
                    <a href="../views/xemthongtinnv.php" target="T3"><span>Nhân viên</span></a> </li>
                <li class="sub-menu">
                    <a href="../views/xemthongtinPB.php" target="T3"><span>Phòng ban</span></a>
                </li>
                <li class="sub-menu">
                    <a href="../views/timkiem.php" target="T3"><span>Tìm kiếm</span></a>
                </li>
                <li class="sub-menu">
                    <a href="../views/chenthongtinNV.php" target="T3"><span>Chèn nhân viên</span></a>
                </li>
                <li class="sub-menu">
                    <a href="../views/chenthongtinPB.php" target="T3"><span>Chèn phòng ban</span></a>
                </li>
                <li class="sub-menu">
                    <a href="../views/xoathongtinNV.php" target="T3"><span>Xoá thông tin</span></a>
                </li>
                <li class="sub-menu">
                    <a href="../views/capnhat.php" target="T3"><span>Cập nhật</span></a>
                </li>
            </ul>
        </div>
    </aside>
</body>

</html>