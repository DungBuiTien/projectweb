<?php
session_start();
if(!$_SESSION['username'] || $_SESSION['username']==NULL){
     echo "<script>alert('Bạn cần đăng nhâp trước');</script>";
     header("Location: ../admin/login.php");
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
                url:"../admin/xuly_provice.php",
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
                <h3><a href="./">Trang quản lý cựu sinh viên</a></h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#"><i class="fa fa-home fa-lg"></i> Tin tức cựu sinh viên</a>
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-search fa-lg"></i> Tìm kiếm</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"><i class="fa fa-file fa-lg"></i> Báo cáo về cựu sinh viên</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li><a href="#">Báo cáo theo niên khoá</a></li>
                        <li><a href="#">Báo cáo theo lớp khoá học</a></li>
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
                            <i class="fa fa-align-justify"></i>
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
                                            if($_SESSION['username']== "admin" ){
                                                $_SESSION['username']="admin";
                                                echo '<i class="fa fa-user-shield"> '.$_SESSION['username'].'</i>';
                                            }
                                            else  echo '<i class="fa fa-user"> '.$_SESSION['username'].'</i>';
                                         ?>
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="./">Trang chủ</a></li>
                                    <li><a href="../admin/logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content -->
            <div id="PersonalInfomation">
                <ul class="nav nav-tabs">
                    <li class="active"><button class="btn btn-default" data-toggle="tab" href="#home">Thông tin</button></li>
                    <li><button class="btn btn-link" data-toggle="tab" href="#menu1"><i class="fa fa-edit"></i></button></li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div id="searchResult" class="panel col-md-9">
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        require_once("../lib/connect.php");
                                        $username=$_SESSION['username'];
                                        $sql="SELECT a.mssv,a.fullname,a.birthday,a.gender,a.phone_number,a.email,a.image,a.lopkhoahoc,a.khoahoc,b.name as province_name,b.type as province_type,c.type as district_type,c.name as district_name
                                                FROM cuusv AS a
                                                JOIN province AS b on a.provinceid= b.provinceid
                                                JOIN district AS c on a.districtid = c.districtid
                                                WHERE username='{$username}';";
                                        $row=mysqli_fetch_array(mysqli_query($conn,$sql));

                                     ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><b>Họ và tên</b></td>
                                            <td><?php echo $row['fullname'] ?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td><b>Giới tính:</b></td>
                                            <td><?php echo $row['gender'] ?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td><b>Ngày sinh</b></td>
                                            <td><?php echo date("d-m-Y",strtotime($row['birthday'])); ?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td><b>Nơi sinh</b></td>
                                            <td><?php echo $row['district_type']." ".$row['district_name']." - ".$row['province_type']." ".$row['province_name'] ?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td><b>Mã số sinh viên</b></td>
                                            <td><?php echo $row['mssv'] ?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td><b>Lớp</b></td>
                                            <td><?php echo $row['lopkhoahoc'] ?></td>
                                            <td>
                                                <form method="post" action="searchByClass.php" class="form-group form-inline">
                                                    <input class="form-control" type="text" placeholder="Tìm theo lớp">
                                                    <button type="submit" class="btn btn-link"><i class="fa fa-search"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td><b>Khoá học</b></td>
                                            <td><?php echo "QH-".$row['khoahoc']."-I/CQ"; ?></td>
                                            <td>
                                                <form method="post" action="" class="form-group form-inline">
                                                    <input class="form-control" type="text" placeholder="Tìm theo khoá">
                                                    <button type="submit" class="btn btn-link"><i class="fa fa-search"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td><b>Số điện thoại</b></td>
                                            <td><?php echo $row['phone_number'] ?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <td><b>Địa chỉ email</b></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="summary" class="panel col-md-3">
                            <img class="panel-img-top img-responsive img-circle" <?php echo "src='./images/".$row['image']."'" ?> alt="panel image cap" style="margin: auto">
                            <div class="panel-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" id="hoten"><b>Họ và tên: </b><?php echo $row['fullname'] ?></li>
                                    <li class="list-group-item" id="ngaysinh"><b>Ngày sinh: </b><?php echo date("d-m-Y",strtotime($row['birthday'])); ?></li>
                                    <li class="list-group-item" id="lop"><b>Lớp: </b><?php echo $row['lopkhoahoc'] ?></li>
                                    <li class="list-group-item" id="niemkhoa"><b>Khoá học: </b><?php echo "QH-".$row['khoahoc']."-I/CQ"; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="panel panel-default" style="margin: auto">
                            <div class="panel-body panel">
                                <h2 style="text-align: center">Cập nhật thông tin cá nhân</h2><br/>
                                <form class="form-horizontal" action="../admin/info.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" >Họ tên:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="fullname" placeholder="VD: Nguyễn Văn A" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" >Ngày sinh:</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="birthday" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" >Giới tính:</label>
                                        <div class="col-sm-10">
                                            <label class="radio-inline"><input type="radio" name="gender" checked="checked" value="0">Nam</label>
                                            <label class="radio-inline"><input type="radio" name="gender" value="1">Nữ</label>
                                            <label class="radio-inline"><input type="radio" name="gender" value="2">Khác</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Mã số sinh viên:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="mssv" placeholder="14021402" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Nơi sinh:</label>
                                        <div class="col-sm-10">
                                            <select class="form-control col-sm-3 form-inline" id="province" name="province" required>
                                                <option value="none">Tỉnh -Thành phố</option>
                                                <?php
                                                    require_once("../lib/connect.php");
                                                    $result= mysqli_query($conn,"select provinceid,name,type from province");
                                                    while ($data=mysqli_fetch_array($result)) {
                                                       echo "<option value='$data[provinceid]'>$data[name]</option>";
                                                    }
                                                    mysqli_close();
                                                ?>
                                            </select>
                                            <select class="form-control col-sm-3 form-inline" id="district" name="district" required />
                                                <option value="none">Quận - Huyện - Thị xã</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Khoá học:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="khoahoc" class="form-control" placeholder="VD: QH-2016 hoặc 2016" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Lóp:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="lopkhoahoc" class="form-control" placeholder="VD: CA,CA-CLC hoặc K59CA" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Số điện thoại</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="phone_number" placeholder="VD:0988888888" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Email liên hệ:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="email" placeholder="VD: admin@domain.com" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Ảnh</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" name="update" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
         </script>
</body>

</html>