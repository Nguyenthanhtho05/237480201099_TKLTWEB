<?php
// 1. XỬ LÝ UPLOAD NHIỀU FILE
$thong_bao = "";

if (isset($_POST['btn_upload_multi'])) {
    $folder = "BoSuuTap/";
    
    // Tự động tạo thư mục BoSuuTap nếu chưa có
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    // Lấy mảng dữ liệu từ form
    $files = $_FILES['anh_bo_suu_tap'];
    $count_success = 0;
    $count_error = 0;

    // Duyệt qua từng file được chọn
    foreach ($files['name'] as $index => $name) {
        $tmp_name = $files['tmp_name'][$index];
        $target_path = $folder . basename($name);

        // Kiểm tra nếu tên file không rỗng thì mới tiến hành upload
        if (!empty($name)) {
            if (move_uploaded_file($tmp_name, $target_path)) {
                $count_success++;
            } else {
                $count_error++;
            }
        }
    }

    $thong_bao = "<p style='color:blue;'><b>Kết quả:</b> Thành công $count_success file, Thất bại $count_error file.</p>";
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 24: Upload Bộ sưu tập</title>
</head>
<body>

    <h2>UPLOAD NHIỀU FILE LÊN SERVER (BỘ SƯU TẬP)</h2>
    
    <?php echo $thong_bao; ?>

    <form action="" method="POST" enctype="multipart/form-data" style="border: 2px dashed #007bff; padding: 20px; width: 450px;">
        <label>Chọn các ảnh cho bộ sưu tập:</label><br><br>
        <input type="file" name="anh_bo_suu_tap[]" multiple required><br><br>
        <button type="submit" name="btn_upload_multi">Upload Tất Cả</button>
    </form>

    <hr>
    <h3>Danh sách file đã upload trong BoSuuTap/:</h3>
    <ul>
        <?php
        // Hiển thị danh sách file để bạn dễ kiểm tra
        if (is_dir($folder)) {
            $dir_files = scandir($folder);
            foreach ($dir_files as $file) {
                if ($file != "." && $file != "..") {
                    echo "<li>$file</li>";
                }
            }
        }
        ?>
    </ul>

</body>
</html>