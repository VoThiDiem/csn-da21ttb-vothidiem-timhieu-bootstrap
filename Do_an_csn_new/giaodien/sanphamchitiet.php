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
           
            $sql="SELECT sp.masanpham,ha.img, sp.tensanpham, sp.gia,sp.mota,sp.motachitiet,sp.iddm FROM sanpham sp, hinhanh ha WHERE sp.masanpham=ha.idsp AND sp.masanpham=$ma";
           
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
                //echo $query;
                if ($rs->num_rows > 0) {
                    $stt=0;
                   // echo "So anh". $rs->num_rows;
                   
                 ?>  
            



                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">


                <?php 
                    while($r = $rs->fetch_assoc())
                    {
                        echo $r["mahinhanh"]."-".$r["trangthai"]."-".$r["idsp"];
                        ?>
                        
                      <div class="carousel-item <?php if($r["trangthai"]==1) echo "active"?>">
                                <!-- Sản phẩm 1 -->
                                <div class="card border-0">
                                    <div class="img-wrapper">
                                        <img src="../images/<?php echo $r["img"];?>" class="card-img-top rounded-top-0" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <a class="nav-link active fw-bold fs-5" aria-current="page" href="#"><?php echo $row ["tensanpham"]." - Mẫu ". ($stt+1);?></a>
                                    </div>
                                </div>
                            </div>
                      
                        <?php
                        $stt++;
                    }
                }
                ?>
                    <!-- Thêm các carousel-item khác nếu cần -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next caro" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

            </div>

            
            <div class="col-7 ">
                <h3><?php echo $row["tensanpham"]?></h3>
                <h4>Giá:<?php echo $row["gia"]?></h4>
                <h4>Đặc điểm</h4>
                <p><?php echo $row["mota"]?></p>
               
                
            
                
            </div>






            <div class="row mt-3">
                <div class="col">
                    <h5 class="bg-success fw-bold text-white w-25 text-center p-2 m-0">MÔ TẢ SẢN PHẨM</h5>
                    <div class="border border-muted p-3 "><p><?php echo $row["motachitiet"]?></p></div>
                  
                </div>
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

             $sql = "SELECT  DISTINCT sp.masanpham,ha.img, sp.tensanpham, sp.gia, sp.iddm FROM sanpham sp, hinhanh ha WHERE sp.masanpham = ha.idsp AND ha.trangthai=1";
             $result = $conn->query($sql);
             if ($result->num_rows > 0) {
                   while ($row = $result->fetch_assoc()) {
                       if($row["iddm"]==$iddanhmuc && $row["masanpham"]!=$ma){
                        echo '<div class="col-3 bg-white border-0 text-white product-item mt-3">
                          <div class="card text-dark text-center relative" style="width:14rem;">
                              <a href="#" class="mt-2"><img src="../images/'.$row["img"].'" style="width: 13rem" alt="..."></a>
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