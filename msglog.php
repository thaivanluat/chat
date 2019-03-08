<?php
	// kết nối database, lấy dữ liệu chung
	include('includes/general.php');

	// lấy dữ liệu từ table messages theo thứ tự id_msg tăng dần
	$query_get_msg = mysqli_query($cn, "SELECT * FROM messages ORDER BY id_msg ASC");
	// dùng vòng lập while để lấy dữ liệu
	while ($row = mysqli_fetch_assoc($query_get_msg))
	{
		// thời gian gửi tin nhắn
		$date_sent = $row['date_sent'];
			$day_sent = substr($date_sent, 8, 2); 
			$month_sent = substr($date_sent, 5, 2); 
			$year_sent = substr($date_sent, 0, 4); 
			$hour_sent = substr($date_sent, 11, 2); 
			$min_sent = substr($date_sent, 14, 2); 

		// nếu người gửi là $user thì hiển thị khung tin nhắn màu xám
		if ($row['user_from'] == $user)
		{
			echo '
				<div class="msg-user">
					<p>'.$row['body'].'</p>
					<div class="info-msg-user">
						Bạn - '.$day_sent.'/'.$month_sent.'/'.$year_sent.' lúc '.$hour_sent.':'.$min_sent.'
					</div>
				</div>
				
			';
		}
		// ngược lại người gửi không phải là $user thì hiển thị khung tin nhắn màu trắng
		else
		{
			echo '
				<div class="msg">
					<p>'.$row['body'].'</p>
					<div class="info-msg">
						'.$row['user_from'].' - '.$day_sent.'/'.$month_sent.'/'.$year_sent.' lúc '.$hour_sent.':'.$min_sent.'
					</div>
				</div>
			';
		}
	}
?>