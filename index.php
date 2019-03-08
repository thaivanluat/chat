<?php
	// kết nối database
	include('includes/general.php');
	// kết nối header
	include('includes/header.php');

	// nếu tồn tại $user
	if ($user)
	{
		// hiển thị trò chuyện
		echo '
			<div class="main-chat">		
			</div><!-- div.main-chat -->
			<div class="box-chat">
				<form method="POST" id="formSendMsg" onsubmit="return false;">
					<input type="text" placeholder="Nhập nội dung tin nhắn ...">
				</form>
			</div>
		';
	}
	// ngược lại
	else
	{
		// hiển thị form đăng nhập
		header("location: login.php");
	}
	
	include('includes/footer.php');
?>

//testgithub