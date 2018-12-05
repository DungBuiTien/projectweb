<?php
session_start();
if(!$_SESSION['username'] || $_SESSION['username']==NULL){
    header('Localtion : ../admin/login.php');
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Trung tâm trợ giúp</title>
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/custom.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
        <script src="./js/index.js"></script>

    </head>

    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3><a href="./">Trang quản lý cựu sinh viên</a></h3>
                </div>
                <ul class="list-unstyled components">
                    <li>
                        <a href="./"><i class="fa fa-home fa-lg"></i> Tin tức cựu sinh viên</a>
                    </li>
                    <li>
                        <a href="search.php"><i class="fa fa-search fa-lg"></i> Tìm kiếm</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"><i class="fa fa-file fa-lg"></i> Báo cáo về cựu sinh viên</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="reportByYear.php">Báo cáo theo niên khoá</a></li>
                            <li><a href="#">Báo cáo theo lớp khoá học</a></li>
                            <li><a href="#">Báo cáo chung</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-chart-bar fa-lg"></i> Thống kê</a>
                    </li>
                    <li class="active">
                        <a href="helpCenter.php"><i class="fa fa-question-circle fa-lg"></i> Trung tâm trợ giúp</a>
                    </li>
                    <li>
                        <a href="changeInfo.php"><i class="fa fa-cog fa-lg"></i> Cài đặt tài khoản</a>
                    </li>
                </ul>
            </nav>
            <!-- Page Content Holder -->
            <div id="content" class="container">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-link navbar-btn">
                                <i class="fa fa-align-justify"></i>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <button class="btn btn-default" data-toggle="dropdown">
                                        <?php
                                            if($_SESSION['username']== "admin" ){
                                                echo '<i class="fa fa-user-shield"> '.$_SESSION['username'].'</i>';
                                            }
                                            else  echo '<i class="fa fa-user"> '.$_SESSION['username'].'</i>';
                                         ?>
                                            <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="./">Trang chủ</a></li>
                                        <?php if($_SESSION['username']== "admin" || $_SESSION['username']== "anonymous")
                                    echo '<li><a href="../admin">Quay lại trang quản trị</a></li>';
                                     ?>
                                            <li><a href="../admin/logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content -->
                <div class="pageContent col col-md-12 col-sm-12">
                        <h2>Giới thiệu trang web</h2>
                        <p> Trang web này được phát triển bởi các sinh viên lớp K61T: Tiêu Công Hoà, Bùi Tiến Dũng, Đỗ Thành Huy, Trần Hưng Nhật, Vũ Sỹ Kiên, Nguyễn Đức Công nhằm giúp các cựu SV đã ra trường có thể liên lạc,giao lưu cũng như cập nhật các thông tin mới của trường Đại học Công nghệ
                        Trang web bao gồm các chức năng như Tìm kiếm, Thay đổi thông tin cá nhân của cựu sinh viên, Tin tức về cựu sinh viên và Thống kê về cựu sinh viên </p>
                        <p> Danh mục Thống kê bao gồm các biểu đồ báo cáo về cựu sinh viên, được sắp xếp theo từng niên khoá, theo lớp khoá học và báo cáo chung. Biểu đồ cho thấy tỉ lệ cựu SV đã có việc làm, mức lương của các cựu SV. Số liệu được thu thập qua danh sách của nhà trường </p>
                        <div class="line"></div>
                        <h2 class="flr">Hướng dẫn tìm kiếm</h2>
                        <p> Bấm mục Tìm kiếm. Danh mục Tìm kiếm của chúng tôi được phân loại theo các mục Mã Sinh viên, Họ và tên, Khoá học và Lớp khoá học. Nhập thông tin mà bạn cần tìm kiếm và chúng tôi tìm thông tin mà bạn cần! </p>
                        <div class="line"></div>
                        <h2>Hướng dẫn chỉnh sửa thông tin cá nhân</h2>
                        <p> Truy cập Cài đặt Tài khoản, bấm Cập nhật thông tin cá nhân để hệ thống tiến hành cập nhật lại thông tin cá nhân của bạn! </p>
                        <div class="line"></div>
                        <h2 class="flr">Liên hệ với chúng tôi</h2>
                        <p>Liên hệ với chúng tôi qua địa chỉ Facebook:
                        <ul>
                        <li> <a href= " https://www.facebook.com/chihuy.canhcut "target="_blank"> Trần Hưng Nhật </a> </li>
                        <li> <a href= " https://www.facebook.com/lazy.skynet "target="_blank"> Bùi Tiến Dũng </a> </li>
                        <li> <a href= " https://www.facebook.com/tieuconghoa193 "target="_blank"> Tiêu Công Hoà </a> </li>
                        <li> <a href= " https://www.facebook.com/profile.php?id=100004066956499 "target="_blank"> Đỗ Thành Huy </a> </li>
                        <li> <a href= " https://www.facebook.com/D.Beelzebub "target="_blank"> Vũ Sỹ Kiên </a> </li>
                        <li> <a href= " https://www.facebook.com/ndc251198 "target="_blank"> Nguyễn Đức Công </a> </li>
                        </ul>
                        </p>
                        <div class="line"></div>
                </div>
            </div>
        </div>
    </body>

    </html>