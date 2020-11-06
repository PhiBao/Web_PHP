<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='utf-8' />
  <title>Tìm kiếm</title>
  <link rel="stylesheet" href="/../public/css/form.css" />
</head>

<body>
  <section class="container">
    <?php include '_boxLeft.php' ?>
    <?php include '_boxRight.php' ?>
    <?php include '_footer.php' ?>
    <section class="main-content">
      <h1 class="title">TÌM KIẾM NHÂN VIÊN</h1>
      <form action='/find' method='get'>
        <div>
           <div class="inner-wrap">
              <label class="label" for="idnv">Mã nhân viên:</label>
                <input type="text" id="idnv" name="IDNV" placeholder="Tìm kiếm theo IDNV" required />
            </div>
            <div>
              <input class="button" type='submit' value='Search'/>
              <INPUT class="button" TYPE='Reset' value='Reset'>
            </div>
        </div>
      </form>
    </section> 
  </section>
</body>

</html>