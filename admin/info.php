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
	$salary			= test_input($_POST['salary']);
	$work			= test_input($_POST['work']);
	
	$target= "../home/images/". basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'];
	
	function getExtension($str) {
		$i = strrpos($str,".");
		if (!$i) { return ""; }
		$l = strlen($str) - $i;
		$ext = substr($str,$i+1,$l);
		return $ext;
	}
	
	$extension = getExtension($image);
	$extension = strtolower($extension);
	?>
	<?php
		require_once("../lib/connect.php");
		$query= "SELECT image from cuusv where username='{$_SESSION['username']}'";
		$image2= mysqli_fetch_assoc(mysqli_query($conn,$query))['image'];
	 ?>
	<?php
	if($image!="" || $image2==""){
		// Nếu nó không phải là file hình thì sẽ thông báo lỗi
		if (($extension != "jpg") && ($extension != "jpeg") && ($extension !="png") && ($extension != "gif"))		{
		// xuất lỗi ra màn hình
			$_SESSION['error']="Vui lòng nhập file hình ảnh!!";
			header("Location: ../home/changeInfo.php");
			exit;
		}
	} else {
		$image=$image2;
	
		}

		require_once("../lib/connect.php");
		
		$sql= "INSERT INTO cuusv
				VALUES(
				'{$mssv}','{$fullname}','{$birthday}','{$gender}','{$lopkhoahoc}','{$khoahoc}','{$phone_number}','{$email}','{$province}','{$district}','{$salary}','{$work}','$image','{$_SESSION['username']}') 
				ON DUPLICATE KEY UPDATE fullname='{$fullname}', phone_number='{$phone_number}', email='{$email}',khoahoc='{$khoahoc}',salary='{$salary}',work='{$work}',lopkhoahoc='{$lopkhoahoc}',image='{$image}'";
		
		@$addinfo = mysqli_query($conn,$sql);
		move_uploaded_file($_FILES['image']['tmp_name'],$target);

		
		if(!$addinfo){
			$_SESSION['error']="Có lỗi xảy ra";
		} else {
			$_SESSION['error']	= "Cập nhật thành công";
			$_SESSION['addinfo'] = $addinfo;
			header("Location: ../home/changeInfo.php");
		}
	}


?>	