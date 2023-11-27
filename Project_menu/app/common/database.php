<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "data_mobile";

try {
    // Tạo kết nối
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Thiết lập chế độ báo lỗi để hiển thị thông báo lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Thực hiện các thao tác với cơ sở dữ liệu
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Đóng kết nối (không cần thiết với PDO vì nó tự động đóng khi biến kết nối mất phạm vi)
// $conn = null;
?>
