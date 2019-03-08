$.ajaxSetup({cache:false});
// thiết lập thời gian thực vòng lặp 1 giây
setInterval(function() {$('.main-chat').load('msglog.php');}, 1000);