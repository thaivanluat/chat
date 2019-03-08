<?php
include('includes/general.php');



if($user)
{
	$query_get_user = mysqli_query($cn, "SELECT count(*) as soluong FROM messages where user_from ='$user' ");
	$row=mysqli_fetch_assoc($query_get_user);

	$query_get_user_date = mysqli_query($cn, "SELECT * FROM users where username ='$user' ");

	$row2=mysqli_fetch_assoc($query_get_user_date);



}
else
{
	echo "fail";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Thông tin người dùng</title>
  <link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.css">
  <meta charset="utf-8">
	<style type="text/css">
		.login-page {
  width: 600px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 1000px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}

body {
  background: #737373; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #737373, #4d4d4d);
  background: -moz-linear-gradient(right, #737373, #4d4d4d);
  background: -o-linear-gradient(right, #737373, #4d4d4d);
  background: linear-gradient(to left, #737373, #4d4d4d);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
	</style>
	<script type="text/javascript">
		$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});




	</script>
</head>
<body>
<div class="login-page">
  <div class="form">
    
    <h1><i class="fa fa-user"></i>Tên người dùng:<?php echo "$user";?>  </h1>
    <h1><i class="fa fa-calendar"></i>Ngày tạo: <?php if($row2) {echo $row2['date_created'];}?> </h1>
    <h1><i class="fa fa-comment"></i>Số tin nhắn đã gửi: <?php  if($row){echo $row['soluong'];}?></h1>
    



  </div>
</div>

</body>
</html>
