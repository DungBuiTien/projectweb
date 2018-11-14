<?php
session_start();
if(!$_SESSION['username'] || $_SESSION['username']==NULL){
     echo "<script>alert('Bạn cần đăng nhâp trước');</script>";
     header("Location: ../admin/login.php");
    }

?>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <title>Home</title>
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <script src="js/index.js"></script>

    </head>

    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3><a href="./">Trang quản lý cựu sinh viên</a></h3>
                </div>
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#"><i class="fa fa-home fa-lg"></i> Tin tức cựu sinh viên</a>
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
                    <li>
                        <a href="helpCenter.php"><i class="fa fa-question-circle fa-lg"></i> Trung tâm trợ giúp</a>
                    </li>
                    <li>
                        <a href="changeInfo.php"><i class="fa fa-cog fa-lg"></i> Cài đặt tài khoản</a>
                    </li>
                </ul>
            </nav>
            <!-- Page Content Holder -->
            <div id="content">
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
                                            if($_SESSION['username']== "admin")
                                                echo '<i class="fa fa-user-shield"> '.$_SESSION['username'].'</i>';
                                            else  echo '<i class="fa fa-user"> '.$_SESSION['username'].'</i>';
                                         ?>
                                            <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="changeInfo.php">Cập nhật thông tin</a></li>
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
                <!-- Content here -->
                <div id="slidetieubieu">
                    <h2 style="text-align: center"><b>GƯƠNG MẶT TIÊU BIỂU</b></h2>
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-sm-10">
                            <div id="slide1" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#slide1" data-slide-to="0" class="active"></li>
                                    <li data-target="#slide1" data-slide-to="1"></li>
                                    <li data-target="#slide1" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img class="d-block w-100" src="./images/nhat.jpg" alt="First slide">
                                        <div class="carousel-caption d-none">
                                            <h5>Trần Hưng Nhật</h5>
                                            <p>Tấm gương vượt giàu thất nghiệp.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img class="d-block w-100" src="./images/slide.png" alt="Second slide">
                                        <div class="carousel-caption d-none">
                                            <h5>Đỗ Thành Huy</h5>
                                            <p>Bet thủ đầu tiên thống lĩnh được khu vực gầm cầu Đuống.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img class="d-block w-100" src="./images/slide.png" alt="Third slide">
                                        <div class="carousel-caption d-none">
                                            <h5>Bùi Tiến Dũng</h5>
                                            <p>Fanboy Navi đầu tiên được đưa ra khỏi hang.</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#slide1" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#slide1" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div id="lastestUpdate" class="row">
                    <div class="col col-md-4 col-sm-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">Cựu sinh viên mới nhất</div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>16021234</td>
                                            <td>Trần Hưng Nhật</td>
                                        </tr>
                                        <tr>
                                            <td>16021234</td>
                                            <td>Trần Hưng Nhật</td>
                                        </tr>
                                        <tr>
                                            <td>16021234</td>
                                            <td>Trần Hưng Nhật</td>
                                        </tr>
                                        <tr>
                                            <td>16021234</td>
                                            <td>Trần Hưng Nhật</td>
                                        </tr>
                                        <tr>
                                            <td>16021234</td>
                                            <td>Trần Hưng Nhật</td>
                                        </tr>
                                        <tr>
                                            <td>16021234</td>
                                            <td>Trần Hưng Nhật</td>
                                        </tr>
                                        <tr>
                                            <td>16021234</td>
                                            <td>Trần Hưng Nhật</td>
                                        </tr>
                                        <tr>
                                            <td>16021234</td>
                                            <td>Trần Hưng Nhật</td>
                                        </tr>
                                        <tr>
                                            <td>16021234</td>
                                            <td>Trần Hưng Nhật</td>
                                        </tr>
                                        <tr>
                                            <td>16021234</td>
                                            <td>Trần Hưng Nhật</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-5 col-sm-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">Lớp mới được cập nhật</div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>CMT8-1945</td>
                                            <td>Công nghệ thông tin</td>
                                        </tr>
                                        <tr>
                                            <td>CMT8-1945</td>
                                            <td>Công nghệ thông tin</td>
                                        </tr>
                                        <tr>
                                            <td>CMT8-1945</td>
                                            <td>Công nghệ thông tin</td>
                                        </tr>
                                        <tr>
                                            <td>CMT8-1945</td>
                                            <td>Công nghệ thông tin</td>
                                        </tr>
                                        <tr>
                                            <td>CMT8-1945</td>
                                            <td>Công nghệ thông tin</td>
                                        </tr>
                                        <tr>
                                            <td>CMT8-1945</td>
                                            <td>Công nghệ thông tin</td>
                                        </tr>
                                        <tr>
                                            <td>CMT8-1945</td>
                                            <td>Công nghệ thông tin</td>
                                        </tr>
                                        <tr>
                                            <td>CMT8-1945</td>
                                            <td>Công nghệ thông tin</td>
                                        </tr>
                                        <tr>
                                            <td>CMT8-1945</td>
                                            <td>Công nghệ thông tin</td>
                                        </tr>
                                        <tr>
                                            <td>CMT8-1945</td>
                                            <td>Công nghệ thông tin</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 col-sm-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">Khóa mới được cập nhật</div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2006-2010</td>
                                        </tr>
                                        <tr>
                                            <td>2006-2010</td>
                                        </tr>
                                        <tr>
                                            <td>2006-2010</td>
                                        </tr>
                                        <tr>
                                            <td>2006-2010</td>
                                        </tr>
                                        <tr>
                                            <td>2006-2010</td>
                                        </tr>
                                        <tr>
                                            <td>2006-2010</td>
                                        </tr>
                                        <tr>
                                            <td>2006-2010</td>
                                        </tr>
                                        <tr>
                                            <td>2006-2010</td>
                                        </tr>
                                        <tr>
                                            <td>2006-2010</td>
                                        </tr>
                                        <tr>
                                            <td>2006-2010</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>

    </html>