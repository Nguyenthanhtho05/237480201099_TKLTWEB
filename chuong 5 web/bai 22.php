<?php
// 1. XỬ LÝ LƯU COOKIE (Phải đặt ở đầu file, trước mọi mã HTML)
$thong_bao = "";
if (isset($_POST['btn_save'])) {
    $ten = $_POST['ten_kh'];
    $sdt = $_POST['sdt_kh'];

    // Tạo cookie lưu trữ trong 10 phút (10 phút * 60 giây = 600)
    setcookie("khach_hang", $ten, time() + 600, "/");
    setcookie("dien_thoai", $sdt, time() + 600, "/");
    
    // Load lại trang để trình duyệt cập nhật cookie mới ngay lập tức
    header("Location: " . $_SERVER['PHP_SELF'] . "?status=success");
    exit();
}

if (isset($_GET['status'])) {
    $thong_bao = "<p style='color:green;'><b>Đã lưu Cookie thành công (Hết hạn sau 10 phút)!</b></p>";
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 22: Quản lý Cookie</title>
</head>
<body>

    <h2>TẠO TRANG ĐĂNG NHẬP KHÁCH HÀNG</h2>
    <?php echo $thong_bao; ?>
    
    <form method="POST" action="">
        Tên khách hàng: <br>
        <input type="text" name="ten_kh" required><br><br>
        
        Số điện thoại: <br>
        <input type="text" name="sdt_kh" required><br><br>
        
        <button type="submit" name="btn_save">Lưu vào Cookie</button>
    </form>

    <hr>

    <h2>TRUY CẬP GIÁ TRỊ TRONG COOKIE</h2>
    <?php
    if (isset($_COOKIE["khach_hang"]) && isset($_COOKIE["dien_thoai"])) {
        echo "<b>Kết quả hiển thị:</b><br>";
        echo "Tên khách hàng: " . $_COOKIE["khach_hang"] . "<br>";
        echo "Số điện thoại: " . $_COOKIE["dien_thoai"] . "<br>";
    } else {
        echo "<i>Chưa có dữ liệu Cookie (hoặc đã hết hạn 10 phút).</i>";
    }
    ?>

</body>
</html>