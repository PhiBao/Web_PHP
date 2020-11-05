<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Index</title>
    <link rel="stylesheet" href="/public/css/style.css" />
    <frameset rows="100,*,100" border="0">
        <frame name=T1 src="/views/_header.html" noresize> </frame>
        <frameset cols="220,*,220">
            <frame name=T2 src="/views/_boxLeft1.php" noresize>
                <frame name=T3 src="/views/_trangchu.html" noresize>
                    <frame name=T4 src="/views/_boxRight.html" noresize>
        </frameset>
        <frame name=T5 src="/views/_footer.html" noresize>
            <noframes></noframes>
</head>

<body>
</body>

</html>