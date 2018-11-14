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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dolorem dolores labore reiciendis modi debitis ad ullam quidem aspernatur! Quidem inventore architecto quibusdam ratione ducimus perspiciatis atque error nesciunt voluptas. Ipsum natus a ratione fugiat deleniti quia alias, fuga libero id obcaecati facere hic. Odit necessitatibus excepturi alias aspernatur dolor. Illo non facilis perspiciatis tenetur sint tempora corrupti ab officia, quia fuga repudiandae, molestias sunt consequuntur eveniet sit, pariatur in numquam commodi alias id repellat soluta praesentium voluptatum a. Saepe praesentium debitis commodi nihil dolores rerum illum laudantium architecto perferendis iusto consequatur sint expedita animi iure quo, quam facere voluptate aliquam neque perspiciatis. Libero, veniam consequuntur recusandae nostrum, ipsam soluta accusamus voluptatibus praesentium nesciunt illo esse aperiam expedita repudiandae commodi molestiae vel iure, quas odio id assumenda suscipit in? Corrupti ad molestias, consectetur corporis, commodi deleniti dolorem qui, autem nobis deserunt hic unde ducimus! Ad voluptatum soluta nisi aspernatur voluptates cumque voluptas. Nulla, illo nemo, numquam facilis ex provident accusantium minus cum, eius dolor quidem rem et labore amet ut tenetur dolore neque itaque repellat beatae vero fugiat aperiam. Harum veritatis, ipsum, est rem quisquam aspernatur, sed omnis iusto similique atque voluptatibus beatae animi tempore distinctio natus. Ab, quidem recusandae?</p>
                        <div class="line"></div>
                        <h2 class="flr">Hướng dẫn tìm kiếm</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dolorem dolores labore reiciendis modi debitis ad ullam quidem aspernatur! Quidem inventore architecto quibusdam ratione ducimus perspiciatis atque error nesciunt voluptas. Ipsum natus a ratione fugiat deleniti quia alias, fuga libero id obcaecati facere hic. Odit necessitatibus excepturi alias aspernatur dolor. Illo non facilis perspiciatis tenetur sint tempora corrupti ab officia, quia fuga repudiandae, molestias sunt consequuntur eveniet sit, pariatur in numquam commodi alias id repellat soluta praesentium voluptatum a. Saepe praesentium debitis commodi nihil dolores rerum illum laudantium architecto perferendis iusto consequatur sint expedita animi iure quo, quam facere voluptate aliquam neque perspiciatis. Libero, veniam consequuntur recusandae nostrum, ipsam soluta accusamus voluptatibus praesentium nesciunt illo esse aperiam expedita repudiandae commodi molestiae vel iure, quas odio id assumenda suscipit in? Corrupti ad molestias, consectetur corporis, commodi deleniti dolorem qui, autem nobis deserunt hic unde ducimus! Ad voluptatum soluta nisi aspernatur voluptates cumque voluptas. Nulla, illo nemo, numquam facilis ex provident accusantium minus cum, eius dolor quidem rem et labore amet ut tenetur dolore neque itaque repellat beatae vero fugiat aperiam. Harum veritatis, ipsum, est rem quisquam aspernatur, sed omnis iusto similique atque voluptatibus beatae animi tempore distinctio natus. Ab, quidem recusandae?</p>
                        <div class="line"></div>
                        <h2>Hướng dẫn chỉnh sửa thông tin cá nhân</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dolorem dolores labore reiciendis modi debitis ad ullam quidem aspernatur! Quidem inventore architecto quibusdam ratione ducimus perspiciatis atque error nesciunt voluptas. Ipsum natus a ratione fugiat deleniti quia alias, fuga libero id obcaecati facere hic. Odit necessitatibus excepturi alias aspernatur dolor. Illo non facilis perspiciatis tenetur sint tempora corrupti ab officia, quia fuga repudiandae, molestias sunt consequuntur eveniet sit, pariatur in numquam commodi alias id repellat soluta praesentium voluptatum a. Saepe praesentium debitis commodi nihil dolores rerum illum laudantium architecto perferendis iusto consequatur sint expedita animi iure quo, quam facere voluptate aliquam neque perspiciatis. Libero, veniam consequuntur recusandae nostrum, ipsam soluta accusamus voluptatibus praesentium nesciunt illo esse aperiam expedita repudiandae commodi molestiae vel iure, quas odio id assumenda suscipit in? Corrupti ad molestias, consectetur corporis, commodi deleniti dolorem qui, autem nobis deserunt hic unde ducimus! Ad voluptatum soluta nisi aspernatur voluptates cumque voluptas. Nulla, illo nemo, numquam facilis ex provident accusantium minus cum, eius dolor quidem rem et labore amet ut tenetur dolore neque itaque repellat beatae vero fugiat aperiam. Harum veritatis, ipsum, est rem quisquam aspernatur, sed omnis iusto similique atque voluptatibus beatae animi tempore distinctio natus. Ab, quidem recusandae?</p>
                        <div class="line"></div>
                        <h2 class="flr">Liên hệ với chúng tôi</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dolorem dolores labore reiciendis modi debitis ad ullam quidem aspernatur! Quidem inventore architecto quibusdam ratione ducimus perspiciatis atque error nesciunt voluptas. Ipsum natus a ratione fugiat deleniti quia alias, fuga libero id obcaecati facere hic. Odit necessitatibus excepturi alias aspernatur dolor. Illo non facilis perspiciatis tenetur sint tempora corrupti ab officia, quia fuga repudiandae, molestias sunt consequuntur eveniet sit, pariatur in numquam commodi alias id repellat soluta praesentium voluptatum a. Saepe praesentium debitis commodi nihil dolores rerum illum laudantium architecto perferendis iusto consequatur sint expedita animi iure quo, quam facere voluptate aliquam neque perspiciatis. Libero, veniam consequuntur recusandae nostrum, ipsam soluta accusamus voluptatibus praesentium nesciunt illo esse aperiam expedita repudiandae commodi molestiae vel iure, quas odio id assumenda suscipit in? Corrupti ad molestias, consectetur corporis, commodi deleniti dolorem qui, autem nobis deserunt hic unde ducimus! Ad voluptatum soluta nisi aspernatur voluptates cumque voluptas. Nulla, illo nemo, numquam facilis ex provident accusantium minus cum, eius dolor quidem rem et labore amet ut tenetur dolore neque itaque repellat beatae vero fugiat aperiam. Harum veritatis, ipsum, est rem quisquam aspernatur, sed omnis iusto similique atque voluptatibus beatae animi tempore distinctio natus. Ab, quidem recusandae?</p>
                        <div class="line"></div>
                </div>
            </div>
        </div>    
        

    </body>

    </html>