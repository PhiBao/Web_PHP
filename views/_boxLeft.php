<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Menu</title>
    <link rel="stylesheet" href="/../public/css/style.css" />
</head>

<body>
    <aside class="sidebar">
        <div class="leftside-navigation" class="nano">
            <ul class="nano-content">  
                <li>
                    <a href="/home"><span>Trang chủ</span></a>
                </li>
                <li class="sub-menu">
                    <a href="/staff"><span>Nhân viên</span></a> </li>
                <li class="sub-menu">
                    <a href="/department""><span>Phòng ban</span></a>
                </li>
                <li class="sub-menu">
                    <a href="/search"><span>Tìm kiếm</span></a>
                </li>
                <?php 
                    if (isset($_SESSION["Username"])) {
                ?>
                <li class="sub-menu">
                    <a href="/insert/staff"><span>Chèn nhân viên</span></a>
                </li>
                <li class="sub-menu">
                    <a href="/append/department"><span>Chèn phòng ban</span></a>
                </li>
                <li class="sub-menu">
                    <a href="/delete"><span>Xoá thông tin</span></a>
                </li>
                <li class="sub-menu">
                    <a href="/update"><span>Cập nhật</span></a>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </aside>
</body>

</html>