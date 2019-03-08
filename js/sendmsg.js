// hàm gửi tin nhắn
function sendMsg() {
	// khai bao biến trong form
	$body_msg = $('#formSendMsg input[type="text"]').val();

	// gửi dữ liệu
	$.ajax({
		url : 'sendmsg.php', // đường dẫn file xử lý
		type : 'POST', // phương thức
		// dữ liệu
		data : {
			body_msg : $body_msg
		// thực thi khi gửi dữ liệu thành công
		}, success : function() {
			$('#formSendMsg input[type="text"]').val(''); // làm trống thanh trò chuyện
		}
	});
}


// bắt sự kiện gõ phím enter trong thanh trò chuyện
$('#formSendMsg input[type="text"]').keypress(function() {
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if (keycode == '13') {
		
		// chạy hàm gửi tin nhắn
		sendMsg();   		
	}
});



// bắt sự kiện click vào thanh trò chuyện
$('#formSendMsg input[type="text"]').click(function(e) {
	// kéo hết thanh cuộn trình duyệt đến cuối
	window.scrollBy(0, $(document).height());
});