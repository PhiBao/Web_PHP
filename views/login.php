<?php
session_start();

if (isset($_SESSION["Username"])) {
  header("Location:/user");
};

if (isset($_POST['login'])) {

    include "../util/MySQLConnection.php";
    $user = mysqli_real_escape_string($link, $_POST['Username']);
    $pass = mysqli_real_escape_string($link, $_POST['Password']);

    $query = "SELECT * FROM users where Username = '$user' and Password = '$pass'";
    $rs = mysqli_query($link, $query);

    if (mysqli_num_rows($rs) == 1) {
      $row = mysqli_fetch_array($rs);
      $_SESSION["Username"] = $row['Username'];
      header("Refresh:0");
    } else {
      $warn = "<div style='color:red;margin-top:1rem'>Bạn phải điền đầy đủ tên đăng nhập và mật khẩu</div>";
    }
}
?>
<html>

<head>
  <meta charset='utf-8' />
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="/../public/css/form.css" />
</head>

<body>
  <section class="container">
    <?php include '_boxLeft.php' ?>
    <?php include '_boxRight.php' ?>
    <?php include '_footer.php' ?>
    <section class="main-content">
      <h1 class="title">XIN CHÀO!</h1>
        <form method='POST' name='login'>
          <div>
            <div class="inner-wrap">
                  <label class="label" for="username">Username:</label> <input
                    type="text" id="username" name="Username" placeholder="captain"
                    required />
                </div>
              <div class="inner-wrap">
                  <label class="label" for="password">Password:</label> <input
                    type="password" id="password" name="Password"
                    placeholder="123" required />
                  <?php
                  echo (isset($warn)) ? $warn : "";
                  ?>
              </div>              
            <div>
              <input class="button" type='submit' value='Đăng nhập' name='login' />
            </div>
          </div>         
      </form>
    </section> 
  </section>
</body>
</html>
