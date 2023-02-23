<?php
//Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
include 'connect.php';
//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
//Kết nối tới database

if (isset($_POST['username'])&&isset($_POST['password'])){
//Lấy dữ liệu nhập vào
$username = $_POST['username'];
$password = md5($_POST['password']);
//Kiểm tra tên đăng nhập có tồn tại không
$sql = "SELECT * FROM member WHERE  user='$username' and pass ='$password'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

echo "Đăng nhập thành công!";
echo "Xin chào <b>". $username . "</b>. Bạn đã đăng nhập thành công. <a href=''>Thoát</a>";
 $conn->close();

}else{
    echo "Tên đăng nhập hoặc mật khẩu không đúng!";}
    
}

}
?>