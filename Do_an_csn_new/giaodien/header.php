<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cây cảnh</title>
    <link rel = "stylesheet" href = "./css/app.css">  
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
     <!-- fontawesome cdn -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- owl carousel -->
     <link rel = "stylesheet" href = "owl_carousel/owl.carousel.css">
     <link rel = "stylesheet" href = "owl_carousel/owl.theme.default.css">
     <!-- custom css -->
     <link rel = "stylesheet" href = "./css/style.css">
    
   <script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
  
</head>
<body>
    <!-- Header -->
  <section class="header bg-light">
    <div class="container pt-3  pb-1 ">
        <div class="row ">
            <div class="col-2  ">
                    <a href="./">
                        <img src="../images/logo.png" class="img-fluid pt--3 " alt="Logo" >
                    </a>
            </div>
            <div class="col-6  pt-3">
                <div class="input-group mb-3">
                    <form action="xuly_timkiem.php" method="POST" class="d-flex w-100">
                      <input type="text" name="tukhoa" class="w-100 py-1 px-2  rounded border border-dark " placeholder="Tìm kiếm..." >
                      <input class="btn btn-dark ms-1" name="timkiem" type="submit" value="Search">
                  </form>
                </div>
            </div>
            <!-- <div class="col-4 col-sm-4 pt-3">
                <div class="row ms-2"> -->
                    <div class="col-2 mt-3  border-end pt-2  text-center  ">    
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:09006750" class="text-decoration-none text-dark fw-bold fs-dt">0917657835</a>
                                
                    </div>
                   
                    <div class="col-2 mt-3 ps-4 col sm-5 ">
                      <!-- <div class="container"> -->
                      <button type="button" class="btn btn-primary fw-bold " data-bs-toggle="modal" data-bs-target="#myModal">
                          Đăng nhập
                      </button>
                     
                       <!--</div>-->
                       <!-- The Modal -->
                       <div class="modal " id="myModal">
                         <div class="modal-dialog ">
                           <div class="modal-content p-3 border-0">
                            <form action="xuly_dangnhap.php" method="POST" class="was-validated border-0">
                                <h3 class="text-center fw-bold">Đăng nhập</h3>
                                <div class="mb-3 mt-3">
                                  <label for="tendangnhap" class="form-label fs-5">Tên đăng nhập:</label>
                                  <input type="text" class="form-control" id="tendangnhap" placeholder="Nhập tên đăng nhập" name="tendangnhap" required>
                                  <div class="invalid-feedback">Vui lòng điền vào trường này.</div>
                                </div>
                                <div class="mb-3">
                                  <label for="matkhau" class="form-label fs-5">Mật khẩu:</label>
                                  <input type="password" class="form-control" id="matkhau" placeholder="Nhập mật khẩu" name="matkhau" required>
                                  <div class="invalid-feedback">Vui lòng điền vào trường này.</div>
                                </div>
                                <button type="submit" class="btn btn-primary w-25 text-center fw-bold" name="btndangnhap" >Đăng nhập</button>
                            </form>
                           </div>
                         </div>
                       </div> 
                    </div>
                    
                <!-- </div>
            </div> -->
           
        </div>
    </div>
  </section>
  
  <!-- Menu -->
  <section class="sticky-top main_menu bg-success z-1 ">
        <div class="container">         
           <ul class="nav justify-content-center">
            <li class="nav-item ">
                <a class="nav-link active text-white" aria-current="page" href="index.php">TRANG CHỦ</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active text-white"  href="gioithieu.php">GIỚI THIỆU</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active text-white" href="sanpham.php">SẢN PHẨM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="lienhe.php">LIÊN HỆ</a>
            </li>
           
          </ul>

        </div>
  </section>