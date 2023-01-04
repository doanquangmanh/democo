proccess.php
<?php 
// Kiểm tra ư liệu được lưu :
 // echo $_POST['email'];
 // echo $_POST['password'];

// Kiểm tra dữ liệu đã lưu đúng chưa :
// khai báo :
$email = $_REQUEST['email'];
$pass = $_REQUEST['password'];
echo $email;
echo $pass;

// check :
// $result = ($email === $_REQUEST['email'] && $pass === $_REQUEST['password']) ? 'Đăng nhập thành công' : 'Đăng nhập thất bại';

// echo $result;
if($email === '' && $pass === ''){
	echo 'dang nhap lai';
}else if($email != $_POST['email'] && $pass != $_POST['password']) {
	echo 'Dang nhap khoong thanh cong';
}else if($email === $_POST['email'] && $pass === $_POST['password']){
	echo 'Dang nhap thanh cong';
}