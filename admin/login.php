<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <style>
        body         { padding-top:80px; }
    </style>
</head> 
<body>
    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
            <h1><span class="fa fa-sign-in"></span> Login</h1>
            <div class="alert alert-danger" id="errors"></div>
            <!-- LOGIN FORM -->
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit"  name="login" class="btn btn-warning btn-lg">Login</button>
            </form>
            <hr>
            <p>Need an account? <a href="signup.php">Signup</a></p>
            <p>Or go <a href="../">home</a>.</p>
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
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: ../home');
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

