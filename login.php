



<?php

include('includes/general.php');
if ($user)
  {
    header('Location: index.php'); 
  }

  if(isset($_POST['ok']))
  {
    $username = @mysqli_real_escape_string($cn, $_POST['username']);
    $password = @mysqli_real_escape_string($cn, $_POST['password']);



    if($username==NULL || $password ==NULL)
    {
        $alert ="Vui lòng nhập tên đăng nhập hoặc mật khẩu";
    }
    else

    { 

          $query_check_exist_user = mysqli_query($cn, "SELECT * FROM users WHERE username = '$username'");
          if($username && $password)
          {
              if (mysqli_num_rows($query_check_exist_user))
              {
              $password = md5($password); // Mã hoá password sang MD5
                // Kiểm tra thông tin đăng nhập
              $query_check_login = mysqli_query($cn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
                // Nếu thông tin đăng nhập đúng
                    if (mysqli_num_rows($query_check_login))
                      {
                        
                        $_SESSION['username'] = $username; // Lưu session giá trị username   
                        header("location: index.php");               
                      }
                // Ngược lại
                    else
                      {
                          $alert= 'Tên đăng nhập hoặc mật khẩu không chính xác.';
                      }

          }

    }
  }


}











 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập - Gchat</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
  <link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.css">
	<style type="text/css">
		.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #cccccc;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #666666;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #4d4d4d;
}
.form .message {
  margin: 15px 0 0;
  color: #737373;
  font-size: 12px;
}
.form .message a {
  color: #000000;
  text-decoration: none;
}
.form .register-form {
  display: none;
}

.form .alert {
  color: #ff0000;
}


.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
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
    <h1><i class="fa fa-commenting"></i> GChat</h1>
    <form class="login-form" action="login.php" method="POST">
      <input type="text" placeholder="Tên đăng nhập" name="username"/>
      <input type="password" placeholder="Mật khẩu" name="password"/>
      
      <button type="submit" name="ok">Đăng nhập</button>
      <div class="alert"><?php if(@$alert){ echo $alert; }?></div>
      <p class="message">Chưa có tài khoản ? <a href="register.php">Tạo tài khoản</a></p>
    </form>
  </div>
</div>

</body>
</html>
