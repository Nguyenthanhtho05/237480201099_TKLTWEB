<?php
session_start();
?>

<h2>TRANG CHÍNH</h2>

<?php
echo "Người dùng đã đăng nhập với tên <b>"
.$_SESSION['username'].
"</b> và Email là <b>"
.$_SESSION['email'].
"</b>";
?>

<br><br>

<a href="logout.php">Đăng xuất</a>