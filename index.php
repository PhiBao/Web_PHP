<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Index</title>
    <link rel="stylesheet" href="css/makeUp.css" />
    <frameset rows="100,*,100" border="0">
        <frame name=T1 src="header.html" noresize> </frame>
        <frameset cols="220,*,220">
            <frame name=T2 src="boxLeft1.php" noresize>
                <frame name=T3 src="trangchu.html" noresize>
                    <frame name=T4 src="boxRight.html" noresize>
        </frameset>
        <frame name=T5 src="footer.html" noresize>
            <noframes></noframes>
</head>

<body>
</body>

</html>