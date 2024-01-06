<?php
session_start();
include_once("connect.php");

$tendangnhap = $mk = "";
$foundAccount = false;

if (isset($_POST["tendangnhap"]) && isset($_POST["matkhau"])) {
    $tendangnhap = $_POST["tendangnhap"];
    $mk = md5($_POST["matkhau"]);
    // Sử dụng câu truy vấn SQL để kiểm tra tên đăng nhập
    $sql = "SELECT tennguoidung, matkhau FROM nguoidung";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        // Sử dụng password_verify để kiểm tra mật khẩu
        if (($tendangnhap==$row["tennguoidung"])&&($mk==$row["matkhau"])) {
            $_SESSION["ten"] = $tendangnhap;
            $foundAccount = true;
            break; // Thoát khỏi vòng lặp khi tìm thấy tài khoản đúng
        }
    }
    // Kiểm tra biến flag để xác định chuyển hướng
    if ($foundAccount) {
        header('Location: ../admin/view/quantri.php');
    } else {
        // Nếu không có tài khoản nào trùng khớp, chuyển hướng về trang đăng nhập
        header('Location: login.php');
    }
  }
}
?>
