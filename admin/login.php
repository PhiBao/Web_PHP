<?php
session_start();
if (isset($_SESSION["Username"])) {
  header("Location:logout.php");
} else if (isset($_POST['submit'])) {
  if (empty($_POST['Username']) or empty($_POST['Password'])) {
    $warn = "Bạn phải điền đầy đủ tên đăng nhập và mật khẩu";
  } else {
    $link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
    $db_select = mysqli_select_db($link, 'DULIEU');
    $user = mysqli_real_escape_string($link, $_POST['Username']);
    $pass = mysqli_real_escape_string($link, $_POST['Password']);
    $query = " SELECT * FROM admin where username = '$user' and password = '$pass' ";
    $rs = mysqli_query($link, $query);
    if (mysqli_num_rows($rs) == 1) {
      $row = mysqli_fetch_array($rs);

      header("location: logout.php");
      echo "bạn đã đăng nhập thành công ";
      $_SESSION["Username"] = $row['username'];
      echo "Xin chào " . $_SESSION["Username"];
    }
  }
}
?>
<html>

<head>
  <meta charset='utf-8' />
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="../css/makeUp.css" />
</head>

<body align="center">
  <form method='POST' name='Login' align="Left">
    <table align="center">
      <tr>
        <td>Tên đăng nhập </td>
        <td><input type='text' name='Username' /></td>
      </tr>
      <tr>
        <td>Mật khẩu </td>
        <td><input type='password' name='Password' /></td>
      </tr>

      <tr align="center">
        <td colspan="2"><input type='submit' value='submit' name='submit' /> </td>
      </tr>
      <tr>
        <td colspan="2">
          <?php
          echo (isset($warn)) ? $warn : "";
          ?>
        </td>
      </tr>
                  
    </table>         
  </form>
      </body>

</html>