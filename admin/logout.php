<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
    unset($_SESSION['error']);
    header("location: login.php"); // đưa về trang đăng nhập
}
?>
