<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gchat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
	<!-- Kết nối thư viện Font Awesome Icons -->
	<link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.css">
	<!-- Kết nối file css/style.css -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		// nếu tồn tại $user
		if ($user)
		{
			// hiển thị menu
			echo '
				<div class="main-menu">
					<h1><i class="fa fa-commenting"></i> GChat</h1>


					<a href="logout.php"><i class="fa fa-sign-out">Đăng xuất</i></a>	
					<a href="info.html" target="_blank"><i class="fa fa-info"></i></a>
					<a href="infouser.php"  target="_blank"><i class="fa fa-user"></i>'.$user.'</a>
				</div>
				<div class="clearfix"></div>
			';
		}
		
	?>