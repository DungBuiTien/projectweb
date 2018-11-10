<!DOCTYPE html>
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


<?php
	if(isset($_POST['submit'])){
		require_once '../lib/connect.php';
		$mssv			=$_POST['mssv'];
		$fullname		=$_POST['fullname'];
		$birthday		=$_POST['birthday'];
		$gender			=$_POST['gender'];
		$khoahoc		=$_POST['khoahoc'];
		$lopkhoahoc		=$_POST['lopkhoahoc'];
		$phone_number	=$_POST['phone_number'];
		$email			=$_POST['email'];
		$address		=$_POST['address'];
		$salary			=$_POST['salary'];
		$work			=$_POST['work'];

		$sql="SELECT mssv,fullname,birthday,gender,lopkhoahoc,khoahoc,phone_number,email,salary,work,b.name as provincename,c.name as districtname 
			from cuusv as a
	        INNER join province as b on a.provinceid=b.provinceid
	        inner join district as c on a.districtid=c.districtid
	        WHERE 	mssv like '%$mssv%' and fullname like '%$fullname%' and birthday like '%$birthday%' and gender like'%$gender%' and khoahoc like'%$khoahoc%' and lopkhoahoc like'%$lopkhoahoc%' and phone_number like'%$phone_number%' and email like'%$email%' and salary like'%$salary%' and work like'%$work%'";
		$array=['mssv','fullname','birthday','gender','khoahoc','lopkhoahoc','phone_number','email','provincename','salary','work'];
		$result=mysqli_query($conn,$sql);
		$birthday		=date("Y-m-d",strtotime($_POST['birthday']));
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
	        	 		<th>Nơi sinh</th>x`
	        	 		<th>Mức lương</th>
	        	 		<th>Công việc</th>
	        	 		<th class="text-center">Sửa</th>
	        	 		<th class="text-center">Xoá</th>
	        	 	</tr>
        	 		<tr style='background-color: #E5F1F4;'>
	      				<th></th>
                        <form action="search.php" method="POST">
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
</body>
</html>