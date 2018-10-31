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
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/chart.js"></script>

</head>

<body>
<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Trang quản lý cựu sinh viên</h3>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="index.php"><i class="fa fa-home fa-lg"></i> Tin tức cựu sinh viên</a>
            <li>
                <a href=""><i class="fa fa-search"></i> Tìm kiếm</a>
            </li>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"><i class="fa fa-file fa-lg"></i> Báo cáo về cựu sinh viên</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="#">Báo cáo theo niên khóa</a></li>
                    <li><a href="#">Báo cáo theo lớp học</a></li>
                    <li><a href="#">Báo cáo chung</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-chart-bar fa-lg"></i> Thống kê</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-question-circle fa-lg"></i> Trung tâm trợ giúp</a>
            </li>
            <li>
                <a href="##"><i class="fa fa-cog fa-lg"></i> Cài đặt tài khoản</a>
            </li>
        </ul>
    </nav>
    <!-- Page Content Holder -->
    <div id="content" class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="btn btn-link navbar-btn">
                        <i class="glyphicon glyphicon-align-left"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <form class="form-group form-inline">
                            <input class="form-control" type="text" placeholder="Search.." name="search">
                            <button type="submit" class="btn btn-default">Search</button>
                        </form>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <button class="btn btn-default" data-toggle="dropdown">
                                <?php
                                if($_SESSION['username']== "admin" || $_SESSION['username']=="tieuconghoa193@gmail.com"){
                                    $_SESSION['username']="admin";
                                    echo '<i class="fa fa-user-shield"> '.$_SESSION['username'].'</i>';
                                }
                                else  echo '<i class="fa fa-user"> '.$_SESSION['username'].'</i>';
                                ?>
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="changeInfo.php">Cập nhật thông tin</a></li>
                                <li><a href="../admin/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content -->
        <!-- 3 panel dau tien -->
        <div class="MIAD-846">
            <div class="col col-md-3 col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h5 style="font-size: x-small">Tổng số cựu sinh viên đã báo cáo</h5>
                        <span style="font-size: x-large; font-weight: bold">10000</span>

                    </div>
                </div>
            </div>
            <div class="col col-md-3 col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h5 style="font-size: x-small">Số cựu sinh viên đã có việc làm</h5>
                        <span style="font-size: x-large; font-weight: bold">9999</span>

                    </div>
                </div>
            </div>
            <div class="col col-md-3 col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h5 style="font-size: x-small">Số cựu sinh viên trắng dái</h5>
                        <span style="font-size: x-large; font-weight: bold">1</span>

                    </div>
                </div>
            </div>
        </div>
        <!-- bieu do duong thong ke qua cac nam -->
        <div class="col col-md-10 col-md-offset-1 col-sm-10">
            <div class="panel panel-default">
                <div class="panel-body"><canvas id="lineChart"></canvas></div>
            </div>
        </div>
        <!-- bieu do trung binh luong qua cac nam -->
        <div class="col col-md-10 col-md-offset-1 col-sm-10">
            <div class="panel panel-default">
                <div class="panel-body"><canvas id="barChart"></canvas></div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script >
<script id="Line Chart js">
    <!-- Line Chart js -->
    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: ["2011", "2012", "2013", "2014", "2015", "2016", "2017"],
            datasets: [{
                label: "Tỉ lệ cựu sinh viên tốt nghiệp có việc liên quan đến ngành học (%)",
                data: [65, 59, 71, 75, 68, 72, 69],
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
            }
            ]
        },
        options: {
            responsive: true
        }
    });
</script>
<script id="Bar Chart js">
    //bar
    var ctxB = document.getElementById("barChart").getContext('2d');
    var myBarChart = new Chart(ctxB, {
        type: 'bar',
        data: {
            labels: ["2011", "2012", "2013", "2014", "2015", "2016","2017"],
            datasets: [{
                label: 'Trung bình lương qua các năm',
                data: [12000000, 19000000, 15000000, 16000000, 20000000, 13000000,15000000],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(125, 148, 45, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(125, 148, 45, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
</body>

</html>