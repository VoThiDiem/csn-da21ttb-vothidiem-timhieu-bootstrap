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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script> -->
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