<?php 
session_start();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($_POST['update']) && isset($_SESSION['username']) ){
	
	$fullname		= test_input($_POST['fullname']);
	$birthday		= test_input($_POST['birthday']);
	$gender 		= test_input($_POST['gender']);
	$mssv			= test_input($_POST['mssv']);
	$province		= test_input($_POST['province']);
	$district		= test_input($_POST['district']);
	$khoahoc		= test_input($_POST['khoahoc']);
	$lopkhoahoc		= test_input($_POST['lopkhoahoc']);
	$phone_number	= test_input($_POST['phone_number']);
	$email 			= test_input($_POST['email']);
	
	$target= "../home/images/". basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'];

	if($gender==0) $gender="Nam";
	elseif($gender==1) $gender="Nữ";
	else $gender="Khác";
	
	if ($province == 'none' || $district=='none') {
		echo "Vui long nhập tỉnh thành và huyện";
	}

	require_once("../lib/connect.php");

	$sql= "INSERT INTO cuusv
			VALUES(
			'{$mssv}','{$fullname}','{$birthday}','{$gender}','{$lopkhoahoc}','{$khoahoc}','{$phone_number}','{$email}','{$province}','{$district}','$image','{$_SESSION['username']}') 
			ON DUPLICATE KEY UPDATE mssv='{$mssv}',gender='{$gender}',phone_number='{$phone_number}',email='{$email}',image='{$image}',username='{$_SESSION['username']}'";
	
	@$addinfo = mysqli_query($conn,$sql);
	move_uploaded_file($_FILES['image']['tmp_name'],$target);

	
	if(!$addinfo){
		echo "<script>alert('Có lỗi xảy ra')</script>";
	} else {
		$_SESSION['addinfo'] = $addinfo;
		header("Location: ../home/changeInfo.php");
	}
}


?>	