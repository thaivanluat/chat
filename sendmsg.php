<?php
	
	include('includes/general.php');

	
	if (!$user)
	{
		header('Location: index.php'); 
	}

	// khai báo các biến gán với dữ liệu nhận được
	$body_msg = @mysqli_real_escape_string($cn, $_POST['body_msg']);
	// xử lý chuỗi $body_msg
	$body_msg = htmlentities($body_msg);
	$body_msg = trim($body_msg);

	// Nếu $body_msg khác rỗng
	if ($body_msg != '')
	{
		// thực thi gửi tin nhắn
		$query_send_msg = mysqli_query($cn, "INSERT INTO messages VALUES (
				'',
				'$body_msg',
				'$user',
				'$date_current'
			)");
	}
?>