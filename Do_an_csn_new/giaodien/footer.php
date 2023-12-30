<section class="footer mt-5 pt-5 bg-success">
     <div class="container ">
      <div class="row">
        <div class="col-5">
            <!-- <a href="/">
                <img src="images/logo.png" class="img-fluid " alt="Logo" style="width: 50%;" >
            </a> -->
            <h5 class="text-white pb-2">Thông tin liên hệ</h5>
            <ul style="list-style-type: square; color:white;">
              <li><strong>Địa chỉ:</strong> Ấp An Chay, xã Thanh Mỹ, huyện Châu Thành, tỉnh Trà Vinh</li>
              <li><strong>Số điện thoại:</strong>: 0917424535</li>
              <li><strong>Email:</strong> vodiem3002@gmail.com</li>
            </ul>
        </div>
        <div class="col">
            <div class="row">
                <div class="col ">
                  <h5 class="text-white pb-2">Về chúng tôi</h5>
                  <ul style="list-style-type: square; color:white;">
                    <li><a href="index.php" class="text-white text-decoration-none">Trang chủ</a></li>
                    <li><a href="gioithieu.php" class="text-white text-decoration-none">Giới thiệu</a></li>
                    <li><a href="sanpham.php" class="text-white text-decoration-none">Sản phẩm</a></li>
                    <li><a href="lienhe.php" class="text-white text-decoration-none">Liên hệ</a></li>
                  </ul>

                </div>
                <div class="col  ">
                  <h5 class="text-white  pb-2">Sản phẩm cây trồng</h5>
                  <ul style="list-style-type: square; color:white;">
                  <?php
               $sql="SELECT * FROM danhmuc";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                   while($row = $result->fetch_assoc()) {
                       ?>
                      
                          <li><a href="sanpham_danhmuc.php?ma=<?php echo $row["madanhmuc"]?>" class="text-white text-decoration-none"><?php echo $row["tendanhmuc"]?></a></li>
                      <?php
                   }
               }else {
                   echo "0 results";
                   }
            ?>


                  </ul>  
                </div>
                <div class="col mt-5">
                        <a href="./">
                          <img src="../images/logo.png" class="img-fluid " alt="Logo" style="width: 100%;" >
                      </a>
                </div>
                
            </div>
           
        </div>
    
        
      </div>
     
     </div>
     <div class="container-fluid bg-white text-dark fw-bold text-center py-2">@Copyright 2023. Design by Vo Thi Diem.</div>
  </section>   
  
</body>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
