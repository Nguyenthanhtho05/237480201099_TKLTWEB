<?php
session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

echo "<h2>TRANG XỬ LÝ THÔNG TIN ĐĂNG NHẬP</h2>";

if($username!="" && $email!="" && $password!="")
{
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;

    echo "Thông tin đăng nhập hợp lệ <br><br>";
    echo "<a href='mainpage.php'>Trang chính</a>";
}
else
{
    echo "Thông tin không hợp lệ";
}
?>