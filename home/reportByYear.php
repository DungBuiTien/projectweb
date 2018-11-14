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
        <title>Báo cáo theo niên khóa</title>
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
                        <a href="#"><i class="fa fa-search fa-lg"></i> Tìm kiếm</a>
                    </li>
                    <li class="active">
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
                <!-- 3 panel dau tien -->
                <?php 
            // in ra số lượng cựu sinh viên, có việc làm, không có việc làm
            require_once("../lib/connect.php");
            $sql="SELECT count(work) as work FROM `cuusv`";
            $sql2="SELECT count(work) as work FROM `cuusv` WHERE work <>''";
            $result= mysqli_query($conn,$sql);
            if(!$result){
                echo mysqli_error($conn);
            } else
            $allwork=mysqli_fetch_assoc(mysqli_query($conn,$sql))['work'];
            $havework=mysqli_fetch_assoc(mysqli_query($conn,$sql2))['work'];
            // in ra số lượng sinh viên có kinh nghiệm năm vào học <= hiện tại -9
            for($i=0;$i<4;$i++){
                $exp[$i]=mysqli_fetch_assoc(mysqli_query($conn,'SELECT COUNT(mssv) FROM cuusv WHERE khoahoc<2016 AND salary='.$i))['COUNT(mssv)'];
            }
             // in ra số lượng sinh viên mới ra trường năm ra trường >= hiện tại -9
            for($i=0;$i<4;$i++){
                $new[$i]=mysqli_fetch_assoc(mysqli_query($conn,'SELECT COUNT(mssv) FROM cuusv WHERE khoahoc>=2016 AND salary='.$i))['COUNT(mssv)'];
            }

        ?>
                    
                        <div class="row justify-content-center">
                            <div class="col col-md-3 col-sm-10">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h5 style="font-size: x-small">Tổng số cựu sinh viên đã báo cáo</h5>
                                        <span style="font-size: x-large; font-weight: bold"><?= $allwork ?></span>

                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-3 col-sm-10">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h5 style="font-size: x-small">Số cựu sinh viên đã có việc làm</h5>
                                        <span style="font-size: x-large; font-weight: bold"><?= $havework ?></span>

                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-3 col-sm-10">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h5 style="font-size: x-small">Số cựu sinh viên thất nghiệp</h5>
                                        <span style="font-size: x-large; font-weight: bold"><?= $allwork- $havework ?></span>

                                    </div>
                                </div>
                            </div>
                        </div>

                    
                    <!-- bieu do duong thong ke qua cac nam -->
                    <div class="row justify-content-center">
                    <div class="col col-md-10 col-sm-10">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row justify-content-center">
                    <!-- bieu do trung binh luong qua cac nam -->
                    <div class="col col-md-10 col-sm-10">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row justify-content-center">
                    <div class="col col-md-5 col-sm-8">
                        <div class="panel panel-default">
                            <label class="text-center label label-info">Tỉ lệ mức lương của người có mới ra trường(Đơn vị: triệu đồng)</label>
                            <div class="panel-body">
                                <canvas id="pieChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-5 col-sm-8">
                        <div class="panel panel-default">
                            <label class="text-center label label-info">Tỉ lệ mức lương của người có kinh nghiệm(Đơn vị: triệu đồng)</label>
                            <div class="panel-body">
                                <canvas id="pieChart2"></canvas>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        <script>
            //in biểu đồ đường
            document.getElementById("lineChart").innerHTML = window.LineChart();
            //in biểu đồ cột
            document.getElementById("barChart").innerHTML = window.BarChart();
            //in biểu đồ đường
            document.getElementById("pieChart").innerHTML = window.PieChart(<?=$new[0] ?>, <?=$new[1] ?>, <?=$new[2] ?>, <?=$new[3] ?>);
            document.getElementById("pieChart2").innerHTML = window.PieChart2(<?=$exp[0] ?>, <?=$exp[1] ?>, <?=$exp[2] ?>, <?=$exp[3] ?>);
        </script>
    </body>

    </html>