<?php
session_start();
if(!isset($_SESSION["ten"]))
 header('Location:../../giaodien/login.php');
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
    <title>Quản lý cây cảnh</title>
</head>

<body class="bg-white">
    <div class="container-fluid main-page">

        <div class="app-main">
            <nav class="sidebar bg-primary">
                <ul>
                   
                    <li>
                        <a href="danhmuc.php"><i class="fa-solid fa-folder-open ico-side"></i>Quản lí danh mục</a>
                    </li>
                    <li>
                        <a href="nguoidung.php"><i class="fa-solid fa-user ico-side"></i>Quản lí người dùng</a>
                    </li>
                    <li>
                        <a href="sanpham.php"><i class="fa-solid fa-tree me-2"></i>Quản lí sản phẩm</a>
                    </li>
                    <li>
                        <a href="hinhanh.php"><i class="fa-regular fa-image me-2"></i>Quản lí hình ảnh</a>
                    </li>
                    <li>
                        <a href="thongke.php"><i class="fa-brands fa-stack-overflow me-2"></i>Thống kê sản phẩm</a>
                    </li>
                    <li>
                        <a href="logout.php?flag=1"><i class="fa-solid fa-right-from-bracket me-2"></i>Đăng xuất</a>
                    </li>
                </ul>
            </nav>
