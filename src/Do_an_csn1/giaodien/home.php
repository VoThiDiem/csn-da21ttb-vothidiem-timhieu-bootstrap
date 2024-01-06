
  
  <section class="main_content">
    <!-- Carousel slider -->
    <div class="slider">

        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
    
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://caycanhsaigon.com.vn/wp-content/uploads/2020/05/banner-cay-canh-sai-gon-3.jpg" alt="Los Angeles" class="d-block" style="width:100%">
              </div>
              <div class="carousel-item">
                <img src="https://caycanhsaigon.com.vn/wp-content/uploads/2020/05/banner-cay-canh-sai-gon.jpg" alt="Chicago" class="d-block" style="width:100%">
              </div>
              <div class="carousel-item">
                <img src="https://caycanhsaigon.com.vn/wp-content/uploads/2020/05/banner-cay-canh-sai-gon-4.jpg" alt="New York" class="d-block" style="width:100%">
              </div>
            </div>
    
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div> 
    
    <!-- product -->
    <!-- Sản phẩm mới -->
    <div class="container-fluid ">
        <div class="container">
            <h3 class="pt-5 fw-bold">Sản phẩm mới</h3>
            <hr class="border-success hr-lg" style="width:10%;">
            <div class="row">
            <?php
              $sql = "SELECT distinct sp.masanpham, ha.img, sp.tensanpham, sp.gia FROM sanpham sp, hinhanh ha WHERE sp.masanpham = ha.idsp ORDER BY sp.masanpham DESC LIMIT 4";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      echo '<div class="col mt-2 bg-white border-0 text-white product-item">
                            
                              <div class="card text-dark text-center  relative overflow" style="width:16rem;">
                              <a href="#" class="mt-2"><img src="../images/'.$row["img"].'" style="width: 15rem;" alt="..."></a>
                              <div class="card-body">
                                  <h6 class="card-title">' . $row["tensanpham"] . '</h6>
                                  <p class="card-text">' . $row["gia"] . 'đ</p>';
                      ?>
                      <a href="sanphamchitiet.php?ma=<?php echo $row["masanpham"]?>" class="btn btn-primary px-5 fw-bold">Xem</a>
                      <?php
                      echo '</div>
                              </div>
                          
                      </div>';
                  }
              } else {
                  echo "0 kết quả";
              }
            ?>     
            </div> 
          </div>  
      </div>
        <!--Sản phẩm cây sen đá-->
         <div class="container">
            <h3 class="pt-5 fw-bold">Cây sen đá</h3>
            <hr class="border-success hr-lg" style="width:10%;">
            <div class="row">
            <?php
              $sql = "SELECT ha.img, sp.tensanpham, sp.gia,sp.masanpham FROM sanpham sp, hinhanh ha WHERE sp.masanpham = ha.idsp AND sp.iddm=24 AND ha.trangthai=1 ORDER BY sp.iddm DESC LIMIT 4";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      echo '<div class="col bg-white border-0 text-white product-item">
                          <div class="card text-dark text-center relative" style="width:16rem;">
                              <a href="#" class="mt-2"><img src="../images/'.$row["img"].'" style="width: 15rem;" alt="..."></a>
                              <div class="card-body">
                                  <h6 class="card-title">' . $row["tensanpham"] . '</h6>
                                  <p class="card-text">' . $row["gia"] . 'đ</p>';
                      ?>
                      <a href="sanphamchitiet.php?ma=<?php echo $row["masanpham"]?>" class="btn btn-primary px-5 fw-bold">Xem</a>
                      <?php
                      echo '</div>
                              
                          </div>
                      </div>';
                  }
              } else {
                  echo "0 kết quả";
              }
            ?>     
            </div> 
          </div>  
      </div> 

      <!-- Cây văn phòng -->
      <div class="container">
            <h3 class="pt-5 fw-bold">Cây dây leo</h3>
            <hr class="border-success hr-lg" style="width:10%;">
            <div class="row">
            <?php
              $sql = "SELECT  ha.img, sp.tensanpham, sp.gia,sp.masanpham FROM sanpham sp, hinhanh ha WHERE sp.masanpham = ha.idsp AND sp.iddm=25 AND ha.trangthai=1  ORDER BY sp.iddm DESC LIMIT 4";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      echo '<div class="col bg-white border-0 text-white product-item">
                          <div class="card text-dark text-center relative" style="width:16rem;">
                              <a href="#" class="mt-2"><img src="../images/'.$row["img"].'" style="width: 15rem;" alt="..."></a>
                              <div class="card-body">
                                  <h6 class="card-title">' . $row["tensanpham"] . '</h6>
                                  <p class="card-text">' . $row["gia"] . 'đ</p>';
                      ?>
                      <a href="sanphamchitiet.php?ma=<?php echo $row["masanpham"]?>" class="btn btn-primary px-5 fw-bold">Xem</a>
                      <?php
                      echo '</div>
                              
                          </div>
                      </div>';
                  }
              } else {
                  echo "0 kết quả";
              }
            ?>     
            </div> 
          </div>  
      </div>
      <div class="container">
            <h3 class="pt-5 fw-bold">Vật tư trồng cây</h3>
            <hr class="border-success hr-lg" style="width:10%;">
            <div class="row">
            <?php
              $sql = "SELECT ha.img, sp.tensanpham, sp.gia,sp.masanpham FROM sanpham sp, hinhanh ha WHERE sp.masanpham = ha.idsp AND sp.iddm=27 AND ha.trangthai=1 ORDER BY sp.iddm DESC LIMIT 4";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      echo '<div class="col bg-white border-0 text-white product-item">
                          <div class="card text-dark text-center relative" style="width:17rem;">
                              <a href="#"class="mt-2"><img src="../images/'.$row["img"].'" style="width: 15rem;" alt="..."></a>
                              <div class="card-body">
                                  <h6 class="card-title">' . $row["tensanpham"] . '</h6>
                                  <p class="card-text">' . $row["gia"] . 'đ</p>';
                      ?>
                      <a href="sanphamchitiet.php?ma=<?php echo $row["masanpham"]?>" class="btn btn-primary px-5 fw-bold">Xem</a>
                      <?php
                      echo '</div>
                              
                          </div>
                      </div>';
                  }
              } else {
                  echo "0 kết quả";
              }
            ?>     
            </div> 
          </div>  
      </div>







<!--       
    <h3 class="pt-5">Vật tư trồng cây</h3>
    <hr class="border-success hr-lg" style="width:10%;">

    <div id="carouselExample" class="carousel slide w-25 ms-5" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                 Sản phẩm 1 -->
                <!-- <div class="card border-0">
                    <div class="img-wrapper">
                        <img src="../images/1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Chăm sóc bảo dưỡng cây xanh</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item"> -->
                <!-- Sản phẩm 2 -->
                <!-- <div class="card border-0">
                    <div class="img-wrapper">
                        <img src="../images/cautieutram.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                    <div class="card-body">
                        <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Chăm sóc bảo dưỡng cây xanh</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item"> -->
                <!-- Sản phẩm 3 -->
                <!-- <div class="card border-0">
                    <div class="img-wrapper">
                        <img src="../images/camtumai.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                    <div class="card-body">
                        <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Chăm sóc bảo dưỡng cây xanh</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item"> -->
                <!-- Sản phẩm 4 -->
                <!-- <div class="card border-0">
                    <div class="img-wrapper">
                        <img src="../images/chaukieu.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                    <div class="card-body">
                        <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Chăm sóc bảo dưỡng cây xanh</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item"> -->
                <!-- Sản phẩm 4 -->
                <!-- <div class="card border-0">
                    <div class="img-wrapper">
                        <img src="../images/cauvang.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                    <div class="card-body">
                        <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Cuối</a>
                    </div>
                </div>
            </div> -->
            <!-- Thêm các carousel-item khác nếu cần -->
        <!-- </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next  caro" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --> 





        

       <!-- Chăm sóc cây cảnh -->
       <!-- <div class="container">
        <h3 class="pt-5">Chăm sóc cây cảnh</h3>
        <hr class="border-success hr-lg" style="width:10%;">
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide " data-bs-ride="false"> -->
            <!-- <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> -->
            <!-- <div class="carousel-inner ">
              <div class="carousel-item active ">
               <div class="card-group ">
                <div class="card border-0">
                  <div class="img-wrapper">
                    <img src="asset/img/img1_chamsoc.jpg " class="card-img-top" alt="...">
                  </div>
                
                 <div class="card-body">
                    <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Chăm sóc bảo dưỡng cây xanh</a>
                </div>
              </div>
              <div class="card border-0">
                <div class="img-wrapper">
                  <img src="asset/img/img2_chamsoc.jpg" class="card-img-top img-fluid" alt="...">
                </div>
                <div class="card-body">
                   <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Chăm sóc bảo dưỡng cây xanh</a>
               </div>
             </div>
             <div class="card border-0">
              <div class="img-wrapper">
                <img src="asset/img/img2_chamsoc.jpg" class="card-img-top img-fluid" alt="...">
              </div>
                <div class="card-body">
                   <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Chăm sóc bảo dưỡng cây xanh</a>
               </div>
             </div>
            
          </div>
          
              </div>
              <div class="carousel-item">
          <div class="card-group">
            <div class="card border-0">
              <div class="img-wrapper">
                <img src="asset/img/img2_chamsoc.jpg" class="card-img-top img-fluid" alt="...">
              </div>
                <div class="card-body">
                   <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Chăm sóc bảo dưỡng cây xanh</a>
               </div>
             </div>
             <div class="card border-0">
              <div class="img-wrapper">
                <img src="asset/img/img2_chamsoc.jpg" class="card-img-top img-fluid" alt="...">
              </div>
                <div class="card-body">
                   <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Chăm sóc bảo dưỡng cây xanh</a>
               </div>
             </div>
             <div class="card border-0">
              <div class="img-wrapper">
                <img src="asset/img/img2_chamsoc.jpg" class="card-img-top img-fluid" alt="...">
              </div>
                <div class="card-body">
                   <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Chăm sóc bảo dưỡng cây xanh</a>
               </div>
             </div>
            </div>
          
              </div>
              <div class="carousel-item">
            
          
          <div class="card-group">
            <div class="card border-0">
              <div class="img-wrapper">
                <img src="asset/img/img2_chamsoc.jpg" class="card-img-top img-fluid" alt="...">
              </div>
                <div class="card-body">
                   <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Chăm sóc bảo dưỡng cây xanh</a>
               </div>
             </div>
             <div class="card border-0">
              <div class="img-wrapper">
                <img src="asset/img/img2_chamsoc.jpg" class="card-img-top img-fluid" alt="...">
              </div>
                <div class="card-body">
                   <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Chăm sóc bảo dưỡng cây xanh</a>
               </div>
             </div>
             <div class="card border-0">
              <div class="img-wrapper">
                <img src="asset/img/img2_chamsoc.jpg" class="card-img-top img-fluid" alt="...">
              </div>
                <div class="card-body">
                   <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Chăm sóc bảo dưỡng cây xanh</a>
               </div>
             </div>
              </div>
            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


 -->

    </div>
  </section> 
    
 

 