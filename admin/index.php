<?php
session_start();
if($_SESSION['username']!= "admin" && $_SESSION['username']!= "anonymous" || ($_SESSION['username']==NULL &&  !$_SESSION['username'])){
     header("Location: ../home");
    }

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../home/images/logo.png" type="image/x-icon">
    <title>ADmin</title>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../home/css/index.css">
    <link rel="stylesheet" type="text/css" href="../home/css/custom.css">
<!-- Bootstrap Js CDN -->
    
	<script src="////maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../home/js/index.js"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <!-- Page Content Holder -->
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-link navbar-btn">
                            
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">
                            <form class="form-group form-inline" method="POST" action="../home/error404.php">
                                <input class="form-control" type="text" placeholder="Search.." name="search">
                                <button type="submit" class="btn btn-default">Search</button>
                            </form>
                        </ul>
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
                                    <li><a href="../home/">Xem như user</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        <div id="slidetieubieu">
            <h2 style="text-align: center"><b>Danh sách sinh viên</b></h2>
        <div class="line"></div>
        <?php
                        require '../lib/connect.php';
                        
                        $sql2="SELECT COUNT(mssv) as total FROM cuusv";
                
                        $result2= mysqli_query($conn,$sql2);
                        $row2 = mysqli_fetch_assoc($result2);
                        $total_records = $row2['total'];
                        $current_page=1;
                        if(isset($_GET['page'])) 
                        $current_page= $_GET['page'];
                        $limit = 15;
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
                        if($total_page!=1){
                        echo '<div>
                        <ul class="pagination pagination-sm">';                                                                         
                       // hiển thị nút prev
                        echo '<li><a href=?page='.($current_page-1).'>Prev</a></li>';
                        // Lặp khoảng giữa
                        
                        for ($i = 1; $i <= $total_page; $i++){
                           if($i==$current_page){
                               echo'<li class="pagination2 active"><a href=?page='.$i.'>'.$i.'</a></li>';
                           } else
                            echo '<li class="pagination2"><a href=?page='.$i.'>'.$i.'</a></li>'; 
                        }
                        // hiển thị nút next
                        echo '<li><a href=?page='.($current_page+1).'>Next</a></li></ul></div>';
                    }
                ?>
                <br/>
        <div class="list" >
             <table id="all" class="table table-bordered table-condensed table-responsive" style="font-size: 0.9em;">
        	 	<thead>
        	 		<tr style="background: #7193FF !important; color: #fff">
	        	 		<th class="text-center">STT</th>
	        	 		<th>MSSV</th>
	        	 		<th>Họ tên</th>
	        	 		<th>Ngày sinh</th>
	        	 		<th>Giới tính</th>
	        	 		<th>Khoá</th>
	        	 		<th>Lớp</th>
	        	 		<th>Số điện thoại</th>
	        	 		<th>Email</th>
	        	 		<th>Nơi sinh</th>
	        	 		<th>Mức lương</th>
	        	 		<th>Công việc</th>
	        	 		<th class="text-center">Sửa</th>
	        	 		<th class="text-center">Xoá</th>
	        	 	</tr>
        	 		<tr style='background-color: #E5F1F4;'>
	      				<th></th>
                        <form action="index.php" method="POST">
	      				<th><input type="text" name="mssv"></th>
	        	 		<th><input type="text" name="fullname"></th>
	        	 		<th><input type="text" name="birthday"></th>
	        	 		<th><input type="text" name="gender"></th>
	        	 		<th><input type="text" name="khoahoc"></th>
	        	 		<th><input type="text" name="lopkhoahoc"></th>
	        	 		<th><input type="text" name="phone_number"></th>
	        	 		<th><input type="text" name="email"></th>
	        	 		<th><input type="text" name="address"></th>
	        	 		<th><input type="text" name="salary"></th>
	        	 		<th><input type="text" name="work"></th>
                        <input hidden="hidden" type="submit"  name="submit">
                        </form>
	        	 		<th></th>
	        	 		<th></th>
	        	 	</tr>
        	 		
        	 	</thead>
        	 	<tbody>
        	 		<?php
                        $sql="SELECT mssv,fullname,birthday,gender,lopkhoahoc,khoahoc,phone_number,email,salary,work,b.name as provincename,c.name as districtname from cuusv as a
                                INNER join province as b on a.provinceid=b.provinceid
                                inner join district as c on a.districtid=c.districtid
                                limit $start,$limit";
                        $result= mysqli_query($conn,$sql);
                        $i=$start+1;
        	 			while ($row=mysqli_fetch_array($result)) {
                            echo "<tr >";
        	 				echo "<td>".$i++."</td>\n";
        	 				echo "<td>".$row['mssv']."</td>\n";
        	 				echo "<td>".$row['fullname']."</td>\n";
        	 				echo "<td>".date("d/m/Y",strtotime($row['birthday']))."</td>\n";
        	 				echo "<td>".$row['gender']."</td>\n";
        	 				echo "<td>".$row['khoahoc']."</td>\n";
        	 				echo "<td>".$row['lopkhoahoc']."</td>\n";
        	 				echo "<td>".$row['phone_number']."</td>\n";
        	 				echo "<td>".$row['email']."</td>\n";
        	 				echo "<td>".$row['provincename']."</td>\n";
        	 				echo "<td>".$row['salary']."</td>\n";
        	 				echo "<td>".$row['work']."</td>\n";
        	 				echo "<td><a href><i class='fa fa-edit'></a></td>\n";
        	 				echo "<td><a href><i class='fa fa-times'></a></td>\n";
        	 				echo "</tr>";
        	 			}
        	 		 ?>
                     <?php
                            if(isset($_POST['submit'])){
                                echo "
                                <script>
                                    document.getElementById('all').setAttribute('hidden','hidden');
                                </script>
                                 ";
                                require_once '../lib/connect.php';
                                $mssv           =$_POST['mssv'];
                                $fullname       =$_POST['fullname'];
                                $birthday       =$_POST['birthday'];
                                $gender         =$_POST['gender'];
                                $khoahoc        =$_POST['khoahoc'];
                                $lopkhoahoc     =$_POST['lopkhoahoc'];
                                $phone_number   =$_POST['phone_number'];
                                $email          =$_POST['email'];
                                $address        =$_POST['address'];
                                $salary         =$_POST['salary'];
                                $work           =$_POST['work'];

                                $sql="SELECT mssv,fullname,birthday,gender,lopkhoahoc,khoahoc,phone_number,email,salary,work,b.name as provincename,c.name as districtname 
                                    from cuusv as a
                                    INNER join province as b on a.provinceid=b.provinceid
                                    inner join district as c on a.districtid=c.districtid
                                    WHERE   mssv like '%$mssv%' and fullname like '%$fullname%' and birthday like '%$birthday%' and gender like'%$gender%' and khoahoc like'%$khoahoc%' and lopkhoahoc like'%$lopkhoahoc%' and b.name like '%$address%' and phone_number like '%$phone_number%' and email like'%$email%' and salary like'%$salary%' and work like'%$work%'";
                                $array=['mssv','fullname','birthday','gender','khoahoc','lopkhoahoc','phone_number','email','provincename','salary','work'];
                                $result=mysqli_query($conn,$sql);
                                $birthday       =date("Y-m-d",strtotime($_POST['birthday']));
                                    ?>
                                    <div class="container-fluid">
                                    <table class="table table-bordered table-condensed table-responsive" style="font-size: 0.9em;">
                                        <thead>
                                            <tr style="background: #7193FF !important; color: #fff">
                                                <th class="text-center">STT</th>
                                                <th>MSSV</th>
                                                <th>Họ tên</th>
                                                <th>Ngày sinh</th>
                                                <th>Giới tính</th>
                                                <th>Khoá</th>
                                                <th>Lớp</th>
                                                <th>Số điện thoại</th>
                                                <th>Email</th>
                                                <th>Nơi sinh</th>
                                                <th>Mức lương</th>
                                                <th>Công việc</th>
                                                <th class="text-center">Sửa</th>
                                                <th class="text-center">Xoá</th>
                                            </tr>
                                            <tr style='background-color: #E5F1F4;'>
                                                <th></th>
                                                <form action="index.php" method="POST">
                                                <th><input type="text" name="mssv"></th>
                                                <th><input type="text" name="fullname"></th>
                                                <th><input type="text" name="birthday"></th>
                                                <th><input type="text" name="gender"></th>
                                                <th><input type="text" name="khoahoc"></th>
                                                <th><input type="text" name="lopkhoahoc"></th>
                                                <th><input type="text" name="phone_number"></th>
                                                <th><input type="text" name="email"></th>
                                                <th><input type="text" name="address"></th>
                                                <th><input type="text" name="salary"></th>
                                                <th><input type="text" name="work"></th>
                                                <input hidden="hidden" type="submit"  name="submit">
                                                </form>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php
                                    $j=1;
                                    while($row=mysqli_fetch_array($result)){
                                        echo "<tr >";
                                        echo "<td>".$j++."</td>\n";
                                        for($i=0;$i<count($array);$i++){
                                            echo "<td>".$row[$array[$i]]."</td>";
                                        }
                                        echo "<td><a href><i class='fa fa-edit'></a></td>\n";
                                        echo "<td><a href><i class='fa fa-times'></a></td>\n";
                                        echo "</tr>";
                                }
                                    
                            }
                                        
                        ?>  
        	 	</tbody>
        	 </table>
             
        </div>
    </div>
    
</div>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>