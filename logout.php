<?php
	// Bắt đầu session
	session_start();
	// Xoá session
	session_destroy();
	// Di chuyển đến trang index.php
	header('Location: index.php');
?>