<?php

$thong_bao = "";

if (isset($_POST['btn_upload'])) {
    $folder = "Tailieu/";
    
    
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    
    $file_name = $_FILES['file_tai_lieu']['name'];
    $file_tmp = $_FILES['file_tai_lieu']['tmp_name'];
    $target_path = $folder . basename($file_name);

   
    if (move_uploaded_file($file_tmp, $target_path)) {
        $thong_bao = "<p style='color:green;'><b>Thành công:</b> Đã upload file <i>$file_name</i> vào thư mục <b>Tailieu/</b></p>";
    } else {
        $thong_bao = "<p style='color:red;'><b>Lỗi:</b> Không thể upload file. Vui lòng thử lại!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 23: Upload File đơn giản</title>
</head>
<body>

    <h2>UPLOAD MỘT FILE LÊN SERVER</h2>
    
    <?php echo $thong_bao; ?>

    <form action="" method="POST" enctype="multipart/form-data" style="border: 1px solid #ccc; padding: 20px; width: 400px;">
        <label>Chọn tài liệu để upload:</label><br><br>
        <input type="file" name="file_tai_lieu" required><br><br>
        <button type="submit" name="btn_upload">Bắt đầu Upload</button>
    </form>

</body>
</html>