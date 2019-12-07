<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Login</title>
  <link rel="stylesheet" href="../css/makeUp.css" />
</head>

<body>
  <form action='xulilogin.php' method='post'>
    <table width="300" align="center" border="center">
      <tr>
        <td align="center" colspan="2">Login</td>
      </tr>
      <tr>
        <td>User</td>
        <td> <input type="text" size='20' name="User" /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" size='20' name="Pass"></td>
      </tr>
      <tr align="center">
        <td colspan="2">
          <form id="form" name="form" method="post" action='xulilogin.php'>
            <input type="submit" name="Ok" id="Ok" value="Ok" />
            <input type="reset" name="Reset" id="Reset" value="Reset" />
            <input type="button" name="Exit" id="Exit" value="Exit" />
          </form>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>