<?php
	$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
    $db_select = mysqli_select_db($link, 'DULIEU');
?>