<?php
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);
	$phone = filter_var(trim($_POST['phone']),
	FILTER_SANITIZE_STRING);
	$comment = filter_var(trim($_POST['comment']),
	FILTER_SANITIZE_STRING);

	$mysql = new mysqli('localhost','root','root','mma');
	$mysql->query("INSERT INTO `info` (`name`,`phone`, `comment`) VALUES('$name', '$phone', '$comment')");
	$mysql->close();

	header('Location: /');
?>