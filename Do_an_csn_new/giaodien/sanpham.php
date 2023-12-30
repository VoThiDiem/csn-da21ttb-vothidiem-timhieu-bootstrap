<?php
include_once("header.php");
?>
<div class="container">
<div class="row mt-4">
    <div class="col-3"> <span class="fs-3 ps-2 fw-bold">DANH MỤC </span><br></div>
    <div class="col-9 text-center"><span class="fs-3 ps-2 text-center fw-bold ">SẢN PHẨM</span><br></div>
</div>
    <div class="row pt-5">
    
    <div class="col-3">
        <ul class="list-unstyled item-list ">
            <?php
               $sql="SELECT * FROM danhmuc";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                   while($row = $result->fetch_assoc()) {
                       ?>
                      <li class="border-bottom-dotted p-2 w-75">
                          <a href="sanpham_danhmuc.php?ma=<?php echo $row["madanhmuc"]?>" class=" item-link text-decoration-none text-dark fs-5"><?php echo $row["tendanhmuc"]?></a>
                      </li>
                      <?php
                   }
               }else {
                   echo "0 results";
                   }
            ?>
        </ul>

    </div>

        <div class="col-9">
            <div class="row  ">
                <?php
              $sql = "SELECT ha.img, sp.tensanpham, sp.gia, sp.masanpham FROM sanpham sp, hinhanh ha WHERE sp.masanpham = ha.idsp AND ha.trangthai=1";

              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                                  echo '<div class="col-3 bg-white border-0 text-white product-item mt-3">
                          <div class="card text-dark text-center relative" style="width:14rem;">
                          <a href="#" class="mt-2"><img src="../images/'.$row["img"].'" style="width:13rem;" alt="..."></a> 
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

</div>
<?php
include_once("footer.php");
?>