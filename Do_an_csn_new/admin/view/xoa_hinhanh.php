<?php
include_once("connect.php");
$ma="";
if(isset($_GET["ma"]))
{
    $ma = $_GET["ma"];
}
// Kiểm tra xem hình ảnh có tồn tại không
$sqlCheck = "SELECT * FROM hinhanh WHERE mahinhanh = '$ma'";
$resultCheck = $conn->query($sqlCheck);

if ($resultCheck->num_rows > 0) {
    // Hình ảnh tồn tại, thực hiện xóa
    $sqlDelete = "DELETE FROM hinhanh WHERE mahinhanh = '$ma'";
    if ($conn->query($sqlDelete) === TRUE) {
        // Xóa thành công, có thể thực hiện các công việc khác nếu cần
        header("Location: hinhanh.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Hình ảnh không tồn tại.";
}

$conn->close();
?>
