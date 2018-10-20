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
    <title>Home</title>
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
    <script>
        $(document).ready(function(){
           $("#province").change(function(){
               id= $("#province").val();
               $.ajax({
                url: "js/xuly_provice.php",
                type:"post",
                data: "provinceid="+id,
                async: true,
                success: function (kq) {
                    $("#district").html(kq);
                }
            });
               return false;    
           });
       });
   </script>
   <script type="text/javascript" src="./js/index.js"></script>
   
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
                    <a href="#"><i class="fa fa-home fa-lg"></i> Tin tức cựu sinh viên</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"><i class="fa fa-file fa-lg"></i> Báo cáo về cựu sinh viên</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li><a href="#">Báo cáo 1</a></li>
                        <li><a href="#">Báo cáo 2</a></li>
                        <li><a href="#">Báo cáo 3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sliders-h fa-lg"></i> Dashboard</a>
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
                                        <li><a href="#">Cập nhật thông tin</a></li>
                                        <li><a href="../admin/logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content -->
                <h2 id="tenlop" style="text-align:center"> Danh sách sinh viên lớp CMT8-1945 </h2>
                <br>
                <div id="info" class="panel col-md-offset-2 col-md-8">
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Mã số sinh viên</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Ngày sinh</th>
                                    <th scope="col">Chú thích</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><b>16021234</b></td>
                                    <td>Trần Hưng Nhật</td>
                                    <td>30/04/1975</td>
                                    <td>Lớp trưởng</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td><b>16021234</b></td>
                                    <td>Trần Hưng Nhật</td>
                                    <td>30/04/1975</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td><b>16021234</b></td>
                                    <td>Trần Hưng Nhật</td>
                                    <td>30/04/1975</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td><b>16021234</b></td>
                                    <td>Trần Hưng Nhật</td>
                                    <td>30/04/1975</td>
                                    <td>Bí thư</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td><b>16021234</b></td>
                                    <td>Trần Hưng Nhật</td>
                                    <td>30/04/1975</td>
                                    <td>Lớp phó</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td><b>16021234</b></td>
                                    <td>Trần Hưng Nhật</td>
                                    <td>30/04/1975</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td><b>16021234</b></td>
                                    <td>Trần Hưng Nhật</td>
                                    <td>30/04/1975</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td><b>16021234</b></td>
                                    <td>Trần Hưng Nhật</td>
                                    <td>30/04/1975</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td><b>16021234</b></td>
                                    <td>Trần Hưng Nhật</td>
                                    <td>30/04/1975</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td><b>16021234</b></td>
                                    <td>Trần Hưng Nhật</td>
                                    <td>30/04/1975</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td><b>16021234</b></td>
                                    <td>Trần Hưng Nhật</td>
                                    <td>30/04/1975</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td><b>16021234</b></td>
                                    <td>Trần Hưng Nhật</td>
                                    <td>30/04/1975</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td><b>16021234</b></td>
                                    <td>Trần Hưng Nhật</td>
                                    <td>30/04/1975</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td><b>16021234</b></td>
                                    <td>Trần Hưng Nhật</td>
                                    <td>30/04/1975</td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- jQuery CDN - Slim version (=without AJAX) -->
                <script type="text/javascript">
                 $(document).ready(function () {
                     $('#sidebarCollapse').on('click', function () {
                         $('#sidebar').toggleClass('active');
                     });
                 });
             </script>
         </body>

         </html>