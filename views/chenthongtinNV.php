<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Chèn thông tin nhân viên</title>
<link rel="stylesheet" href="/../public/css/form.css" type="text/css" />
</head>

<body>
    <section class="container">
        <?php include '_boxLeft.php'; ?>
        <?php include '_boxRight.php'; ?>
        <?php include '_footer.php'; ?>
        <!--main content start-->
        <section class="main-content">
            <h1 class="title">Điền Thông Tin Nhân Viên</h1>
            <form action="../controllers/xulichenthongtinNV.php"
                method="POST">
                <div>
                    <div class="inner-wrap">
                        <label class="label" for="IDNV">IDNV:</label> <input type="text"
                            id="IDNV" name="IDNV" required />
                    </div>
                    <div class="inner-wrap">
                        <label class="label" for="IDPB">IDPB:</label> <input type="text"
                            id="IDPB" name="IDPB" required />
                    </div>
                    <div class="inner-wrap">
                        <label class="label" for="HoTen">Họ tên:</label> <input
                            type="text" id="HoTen" name="HoTen" required />
                    </div>
                    <div class="inner-wrap">
                        <label class="label" for="DiaChi">Địa chỉ:</label> <input
                            type="text" id="DiaChi" name="DiaChi" required />
                    </div>

                    <input onclick="return confirm('Are you sure about this data')"
                        class="button" TYPE='Submit' value='Chèn'>
                </div>
            </form>
        </section>
    </section>
</body>
</html>