<?php
session_start();
if (!isset($_SESSION["Username"])) {
    header("Location: boxLeft1.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Box</title>
    <link rel="stylesheet" href="css/makeUp.css" />
</head>

<body>
    <aside class="sidebar">
        <div id="leftside-navigation" class="nano">
            <ul class="nano-content">
                <li>
                    <a href="trangchu.html" target="T3"><span>Trang chủ</span></a>
                </li>
                <li>
                    <a href="admin/login.php" target="T3"><span>Đăng nhập</span></a>
                </li>
                <li class="sub-menu">
                    <a href="lib/xemthongtinnv.php" target="T3"><span>Nhân viên</span></a> </li>
                <li class="sub-menu">
                    <a href="lib/xemthongtinPB.php" target="T3"><span>Phòng ban</span></a>
                </li>
                <li class="sub-menu">
                    <a href="lib/timkiem.php" target="T3"><span>Tìm kiếm</span></a>
                </li>
                <li class="sub-menu">
                    <a href="admin/chenthongtinNV.php" target="T3"><span>Chèn nhân viên</span></a>
                </li>
                <li class="sub-menu">
                    <a href="admin/chenthongtinPB.php" target="T3"><span>Chèn phòng ban</span></a>
                </li>
                <li class="sub-menu">
                    <a href="admin/xoathongtinNV.php" target="T3"><span>Xoá thông tin</span></a>
                </li>
                <li class="sub-menu">
                    <a href="admin/capnhat.php" target="T3"><span>Cập nhật</span></a>
                </li>
            </ul>
        </div>
    </aside>
</body>

</html>