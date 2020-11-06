<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8' />
<title>Chèn thông tin phòng ban</title>
<link rel="stylesheet" href="/../public/css/form.css" type="text/css" />
</head>
<body>
    <section class="container">

        <?php include '_boxLeft.php' ?>
        <?php include '_boxRight.php' ?>
        <?php include '_footer.php' ?>
        <!--main content start-->
        <section class="main-content">
            <h1 class="title">Điền Thông Tin Phòng Ban</h1>
            <form
                action="../controllers/xulichenthongtinPB.php"
                method="POST">
                <div>
                    <div class="inner-wrap">
                        <label class="label" for="IDPB">IDPB:</label> <input type="text"
                            id="IDPB" name="IDPB" required />
                    </div>
                    <div class="inner-wrap">
                        <label class="label" for="TenPhongBan">Tên phòng ban:</label> <input
                            type="text" id="TenPhongBan" name="TenPhongBan" required />
                    </div>
                    <div class="inner-wrap">
                        <label class="label" for="MoTa">Mô tả:</label> <input type="text"
                            id="MoTa" name="MoTa" required />
                    </div>

                    <input onclick="return confirm('Are you sure about this data')"
                        class="button" TYPE='Submit' value='Chèn'>
                </div>
            </form>
        </section>
    </section>
</body>
</html>