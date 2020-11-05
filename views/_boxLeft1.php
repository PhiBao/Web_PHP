<?php
session_start();
if (isset($_SESSION["Username"])) {
    header("Location: ../views/_boxLeft2.php");
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
                    <a href="../views/login.PHP" target="T3"><span>Đăng nhập</span></a>
                </li>
                <li class="sub-menu">
                    <a href="../views/xemthongtinnv.PHP" target="T3"><span>Nhân viên</span></a>
                </li>
                <li class="sub-menu">
                    <a href="../views/xemthongtinPB.PHP" target="T3"><span>Phòng ban</span></a>
                </li>
                <li class="sub-menu">
                    <a href="../views/timkiem.PHP" target="T3"><span>Tìm kiếm</span></a>
                </li>
            </ul>
        </div>
    </aside>

</html>