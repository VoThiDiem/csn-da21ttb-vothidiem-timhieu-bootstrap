<?php
include_once("header.php")
?>

<div class="container">
<div class="row mt-4">
    <div class="col "> <span class="fs-3 ps-2 fw-bold">DANH MỤC </span><br></div>
    <div class="col"><span class="fs-3 ps-2 text-center fw-bold">SẢN PHẨM CHI TIẾT</span><br></div>
</div>
<div class="row pt-3">
    <div class="col-3">
        <ul class="list-unstyled item-list ">
            <?php
               $sql="SELECT * FROM danhmuc";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                   while($row = $result->fetch_assoc()) {
                       ?>
                      <li class="border-bottom-dotted p-2 w-75">
                          <a href="sanpham_danhmuc.php?ma=<?php echo $row["madanhmuc"];?>" class=" item-link text-decoration-none text-dark fs-5"><?php echo $row["tendanhmuc"]?></a>
                      </li>
                      <?php
                   }
               }else {
                   echo "0 results";
                   }
            ?>
        </ul>

    </div>

    <div class="col-9 ">
      
        <div class="row ">
           
        <?php
           $ma="";
           if(isset($_GET["ma"]))
           {
               $ma = $_GET["ma"];
           }
           
            $sql="SELECT DISTINCT sp.masanpham,ha.img, sp.tensanpham, sp.gia,sp.mota, sp.iddm FROM sanpham sp, hinhanh ha WHERE sp.masanpham=ha.idsp AND sp.masanpham=$ma";
           
            $result = $conn->query($sql);
             
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $iddanhmuc=$row["iddm"];
            ?>
            <div class="col-5 mt-3 pt-1">
            <!-- Lấy tất ca ảnh của sản phẩm-->   
                <?php
                $query="select * from hinhanh where idsp='".$row ["masanpham"]."'";
                    $rs = $conn->query($query);
                    echo $rs->num_rows ;
                if ($rs->num_rows > 0) {
                    $stt=0;
                   
                 ?>            
                        <!-- Carousel -->
                        <div id="demo" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        </div>
                        
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">

                        <?php 
                            while($r = $rs->fetch_assoc())
                            {
                            if($r["trangthai"]==1)
                            {
                                ?>
                                    <div class="carousel-item active">
                                    <img class="w-330 mt-4" src="../images/<?php echo $r["img"];?>">
                                        <div class="carousel-caption">
                                        <h3><?php echo $row ["tensanpham"]."- Mẫu ". ($stt+1);?></h3>
                                    
                                        </div>
                                    </div>
                                <?php
                            }
                            else
                            {
                                ?>
                                <div class="carousel-item">
                                    <img class="w-330 mt-4" src="../images/<?php echo $r["img"];?>">
                                    <div class="carousel-caption">
                                    <h3><?php echo $row ["tensanpham"]."- Mẫu ". ($stt+1);?></h3>
                                
                                    </div>
                                </div>
                                <?php

                            }
                        ?>

                         <?php
                        $stt++;
                    }
                }
                ?>
                    
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
            <div class="col-7 ">
                <h3><?php echo $row["tensanpham"]?></h3>
                <h4>Giá:<?php echo $row["gia"]?></h4>
                <strong>Đặc điểm</strong>
                <p><?php echo $row["mota"]?></p>
            </div>
            <?php
                
              }else {
                echo "0 kết quả";
              }
          
            ?>             
        </div>
        <div class=" w-100 pt-3 mb-3">
            <h3>SẢN PHẨM LIÊN QUAN</h3>
            <div class="row my-4">
            <?php
             
             //Lấy sản phẩm có cùng danh mục

             $sql = "SELECT  DISTINCT sp.masanpham,ha.img, sp.tensanpham, sp.gia, sp.iddm FROM sanpham sp, hinhanh ha WHERE sp.masanpham = ha.idsp";
             $result = $conn->query($sql);
             if ($result->num_rows > 0) {
                   while ($row = $result->fetch_assoc()) {
                       if($row["iddm"]==$iddanhmuc && $row["masanpham"]!=$ma){
                        echo '<div class="col bg-white border-0 text-white product-item">
                          <div class="card text-dark text-center relative" style="width:15rem;">
                              <a href="#"><img src="../images/'.$row["img"].'" style="width: 15rem;" alt="..."></a>
                              <div class="card-body">
                                  <h6 class="card-title">'.$row["tensanpham"].'</h6>
                                  <p class="card-text">'.$row["gia"].'đ</p>';
                      ?>
                      <a href="sanphamchitiet.php?ma=<?php echo $row["masanpham"]?>" class="btn btn-primary px-5 fw-bold">Xem</a>
                      <?php
                      echo '</div>
                              
                          </div>
                      </div>';

                       }
                   }
                }
            ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include_once("footer.php")
?>