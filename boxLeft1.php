<?php
session_start();
if (isset($_SESSION["Username"])) {
    header("Location: boxLeft2.php");
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
                    <a href="admin/login.PHP" target="T3"><span>Đăng nhập</span></a>
                </li>
                <li class="sub-menu">
                    <a href="lib/xemthongtinnv.PHP" target="T3"><span>Nhân viên</span></a>
                </li>
                <li class="sub-menu">
                    <a href="lib/xemthongtinPB.PHP" target="T3"><span>Phòng ban</span></a>
                </li>
                <li class="sub-menu">
                    <a href="lib/timkiem.PHP" target="T3"><span>Tìm kiếm</span></a>
                </li>
            </ul>
        </div>
    </aside>

</html>