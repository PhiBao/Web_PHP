<?php
session_start();
?>
<?php
$myID = $_REQUEST['IDPB'];
include "../util/MySQLConnection.php";
$rs = mysqli_query($link, "SELECT * FROM PhongBan WHERE IDPB='$myID'");
$row_rs = mysqli_fetch_array($rs, MYSQLI_BOTH)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8' />
    <title>Cập nhật thông tin phòng ban</title>
    <link rel="stylesheet" href="/../public/css/form.css" />
</head>

<body>
    <section class="container">
        <?php include '_boxLeft.php'; ?>
        <?php include '_boxRight.php'; ?>
        <?php include '_footer.php'; ?>
        <!--main content start-->
        <section class="main-content">
            <h1 class="title">Chỉnh Sửa Thông Tin Phòng Ban</h1>
            <form action='/controllers/xulicapnhat.php?IDPB=<?php echo $row_rs['IDPB'] ?>' method='post'>
                <div>
                    <div class="inner-wrap">
                        <label class="label" for="IDPB">IDPB:</label> <input type="text"
                            id="IDPB" name="IDPB" value="<?php echo $myID ?>" readonly />
                    </div>
                    <div class="inner-wrap">
                        <label class="label" for="TenPhongBan">Tên phòng ban:</label> <input
                            type="text" id="TenPhongBan" name="TenPhongBan"
                            value="<?php echo $row_rs['Tenpb'] ?>" required />
                    </div>
                    <div class="inner-wrap">
                        <label class="label" for="MoTa">Mô tả:</label> <input type="text"
                            id="MoTa" name="MoTa" value="<?php echo $row_rs['Mota'] ?>" required />
                    </div>
                    <input onclick="return confirm('Are you sure you want to edit')"
                        class="button" TYPE='Submit' value='Cập nhật'>
                </div>
        </form>
</body>

</html>
