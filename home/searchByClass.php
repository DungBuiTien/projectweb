<?php
session_start();

if(!$_SESSION['username'] || $_SESSION['username']==NULL){
    header("Location: ../admin/login.php");
}
elseif(!isset($_SESSION['class']) || !$_SESSION['khoahoc'] || !$_SESSION['class']){
    header("Location: changeInfo.php");
}
?>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tìm kiếm theo lớp khoá học</title>
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
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
        <script type="text/javascript" src="./js/index.js"></script>
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
                        <a href="#"><i class="fa fa-home fa-lg"></i> Tin tức cựu sinh viên</a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-search fa-lg"></i> Tìm kiếm</a>
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
                <h2 id="tenlop" style="text-align:center"></h2>
                <br>
                <!--Phân trang kết quả tìm kiếm -->
                <?php                        
                require_once("../lib/connect.php");
                $sql2="SELECT COUNT(mssv) as total FROM cuusv where khoahoc='{$_SESSION['khoahoc']}' AND lopkhoahoc='{$_SESSION['class']}'";

                $result2= mysqli_query($conn,$sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $total_records = $row2['total'];
                $current_page=1;
                // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
                if(isset($_GET['page'])) 
                    $current_page= $_GET['page'];
                $limit = 10;
                // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
                // tổng số trang
                $total_page = ceil($total_records / $limit);

                // Giới hạn current_page trong khoảng 1 đến total_page
                if ($current_page > $total_page){
                     $current_page=$total_page;
                }

                else if ($current_page < 1 || !is_numeric($current_page)){
                    $current_page=1;
                }

                // Tìm Start
                $start = ($current_page - 1) * $limit;
                // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
                // lấy danh sách sinh viên có cùng lớp và khoá

                $sql = "SELECT mssv,fullname,birthday,gender FROM cuusv where khoahoc='{$_SESSION['khoahoc']}' AND lopkhoahoc='{$_SESSION['class']}' LIMIT $start, $limit";
                $result = mysqli_query($conn, $sql);

                ?>
                    <div id="info" class="panel col-sm-offset-2 col-xs-8">
                        <div class="panel-body">
                            <table class="table table-responsive table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Mã số sinh viên</th>
                                        <th scope="col">Họ và tên</th>
                                        <th scope="col">Ngày sinh</th>
                                        <th scope="col">Giới tính</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            $j=$start+1;

                                while ($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo "<td>".$j++."</td>";
                                    echo "<td>" . $row['mssv'] . "</td>";
                                    echo "<td>" . $row['fullname'] . "</td>";
                                    echo "<td>" . date('d/m/Y',strtotime($row['birthday'])) . "</td>";
                                    echo "<td>" . $row['gender'] . "</td>";
                                    echo "</tr>";

                                    }
                                echo " </tbody></table></div></div>";
                                if($total_page!=1){
                                    echo '<div class="container-fluid" style="width:30%;margin:auto;">
                                    <ul class="pagination">';                                                                         
                                   // hiển thị nút prev
                                    echo '<li><a href=searchByClass.php?page='.($current_page-1).'>Prev</a></li>';
                                    // Lặp khoảng giữa

                                    for ($i = 1; $i <= $total_page; $i++){
                                       if($i==$current_page){
                                           echo'<li class="pagination2 active"><a href=searchByClass.php?page='.$i.'>'.$i.'</a></li>';
                                       } else
                                        echo '<li class="pagination2"><a href=searchByClass.php?page='.$i.'>'.$i.'</a></li>'; 
                                    }
                                    // hiển thị nút next
                                    echo '<li><a href=searchByClass.php?page='.($current_page+1).'>Next</a></li></ul></div>';
                                }
                            ?>
                                        <!-- jQuery CDN - Slim version (=without AJAX) -->

                                        <script type="text/javascript">
                                            var khoahoc = "<?php echo $_SESSION['khoahoc'] ?>";
                                            var classes = "<?php echo $_SESSION['class'] ?>";
                                            document.getElementById('tenlop').innerHTML = "Danh sách lớp QH-" + khoahoc + "/CQ-" + classes;
                                        </script>

    </body>

    </html>