<?php
session_start();

if (isset($_SESSION["Username"])) {
  header("Location:logout.php");
};

if (isset($_POST['login'])) {
  if (empty($_POST['Username']) or empty($_POST['Password'])) {
    $warn = "Bạn phải điền đầy đủ tên đăng nhập và mật khẩu";
  } else {

    include "../util/MySQLConnection.php";
    $user = mysqli_real_escape_string($link, $_POST['Username']);
    $pass = mysqli_real_escape_string($link, $_POST['Password']);

    $query = " SELECT * FROM users where Username = '$user' and Password = '$pass' ";
    $rs = mysqli_query($link, $query);

    if (mysqli_num_rows($rs) == 1) {
      $row = mysqli_fetch_array($rs);
      $_SESSION["Username"] = $row['Username'];

      echo '<script>parent.window.location.reload(true);</script>';
    }
  }
}
?>
<html>

<head>
  <meta charset='utf-8' />
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="../public/css/style.css" />
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
        <td colspan="2"><input type='submit' value='Đăng nhập' name='login' /> </td>
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