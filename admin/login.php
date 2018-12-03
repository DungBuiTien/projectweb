<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
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
            <h1><span class="fa fa-sign-in"></span> Đăng nhập</h1>
            <div class="alert alert-danger" id="errors"></div>
            <!-- LOGIN FORM -->
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label>Tài khoản</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit"  name="login" class="btn btn-warning btn-lg">Đăng nhập</button>
            </form>
            <hr>
            <p>Chưa có tài khoản? <a href="signup.php">Đăng ký ngay</a></p>
            <p>Hoặc quay trở về <a href="../">trang chủ</a>.</p>
        </div>
    </div>
</body>
 <?php
    
    //Gọi file connection.php 
    require_once("../lib/connect.php");
    $error="";
    // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
    if (isset($_POST["login"])) {
        // lấy thông tin người dùng
        $username = $_POST["username"];
        $password = $_POST["password"];
        //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
        //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);
        if ($username == "" || $password =="") {
            $error= "Email hoặc password bạn không được để trống!";
        } else {
            $sql = "select * from login where username = '$username'";
            $query = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($query);
            $row = mysqli_fetch_array($query);
            $password= md5($password);
            if ($num_rows == 0) {
                $error=  "Tên đăng nhập không tồn tại !";
            } else if ($password != $row['password']){
                $error=  "Mật khẩu không đúng !";
            } else {
                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                $_SESSION['username'] = $username;
                if($_SESSION['username']=="admin"){
                    header("Location: index.php");
                } else {
                    header("Location: ../home");
                }
                // Thực thi hành động sau khi lưu thông tin vào session
                
            }
        }
    }
?>
<script type="text/javascript">
        var error="<?php echo $error;?>";
        if(error ==""){
            document.getElementById("errors").style.display = "none";
    } else {
        document.getElementById("errors").innerHTML = error;
    }
</script>
</html>

