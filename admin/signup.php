<!doctype html>
<html>
<head>
    <title>SignUp</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../home/images/logo.png" type="image/x-icon">
    <style>
        body {
            background-image: url(../home/images/background.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .container .navibox {
            position: absolute;
            top: 5%;
            right: 5%;
        }

        h3 {
            font-size: xx-large;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-md-4 navibox jumbotron">
            <h1><span class="fa fa-sign-in"></span> Đăng ký</h1>
            <div class="alert alert-danger" id="errors"></div>
            <form action="signup.php" method="POST">
                <div class="form-group">
                    <label>Tài khoản</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" name="signup" class="btn btn-warning btn-lg">Đăng ký</button>
            </form>
            <hr>
            <p>Đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
            <p>Hoặc quay trở về <a href="../">trang chủ</a>.</p>
        </div>
    </div> 
</body>
<?php
        require_once("../lib/connect.php");
        $error="";
        
        if(isset($_POST['signup'])){
        

        //lấy dữ liệu từ form
            $username   = addslashes($_POST['username']);
            $email      = addslashes($_POST['email']);
            $password   = addslashes($_POST['password']);
        //mã hoá mật khẩu
            $password = md5($password);
            
            // kiểm tra dữ liệu nhập vào có rỗng
            if(!$username || !$email || !$password){
                $error="Vui lòng nhập đầy đủ các thông tin. <a href='javascript: history.go(-1)'>Thử lại</a>";
            // kiểm tra tài khoản đã có trong databases 
            } else if(mysqli_num_rows(mysqli_query($conn,"SELECT username FROM login WHERE username = '$username'")) > 0){
               $error="Tài khoản đã tồn tại. <a href='javascript: history.go(-1)'>Thử lại</a>";
            // kiểm tra email nhập vào hợp lệ
            } else if(!preg_match('/^[A-Za-z0-9_\.]{6,32}$/',$username)){
                $error= "Tên đăng nhập này không hợp lệ. Vui sử dụng tên khác. <a href='javascript: history.go(-1)'>Thử lại</a>";
            }
             else if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/',$email))
            {
               $error= "Email này không hợp lệ. Vui lòng nhập email khác. <a href='javascript: history.go(-1)'>Thử lại</a>";
            // kiểm tra email nhập vào đã có trong databases
            }else if (mysqli_num_rows(mysqli_query($conn,"SELECT email FROM login WHERE email='$email'")) > 0){
                 
                $error= "Email này đã có người dùng. Vui lòng chọn email khác. <a href='javascript: history.go(-1)'>Thử lại</a>";
            // add vào databases
            }else{            
                @$addmember = mysqli_query($conn,"INSERT INTO login (username,password,email) VALUES ('{$username}','{$password}','{$email}')");

                if ($addmember)
                   $error= "Quá trình đăng ký thành công. <a href='login.php'>Đăng nhập</a>";
                else
                   $error="Có lỗi xảy ra trong quá trình đăng ký. <a href='signup.php'>Thử lại</a>";
           }
        }
    ?>
        <!-- in ra lỗi nếu có -->
        <script type="text/javascript">
                var error="<?php echo $error;?>";
                if(error ==""){
                    document.getElementById("errors").style.display = "none";
            } else {
                document.getElementById("errors").innerHTML = error;
            }
        </script>
</html>
