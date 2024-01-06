<?php
include_once("header.php");
?>

<div class="container">
<div class="row mt-4">
    <div class="col-3"> <span class="fs-3 ps-2 fw-bold">DANH MỤC </span><br></div>
    <div class="col-9 text-center"><span class="fs-3 ps-2 text-center fw-bold "></span><br></div>
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
            <div class="row pt-2 ">
                <?php
                $tukhoa=$masp='';
                if (isset($_POST["tukhoa"])&& !empty($_POST["tukhoa"])){
                    $tukhoa = mb_strtolower($_POST["tukhoa"]);
                   // $sql = "SELECT * FROM sanpham WHERE tensanpham LIKE '%".$tukhoa."%'";
                  //  $result = $conn->query($sql);
                  //  $masp=$row['masanpham'];
                    $sql = "SELECT sp.masanpham, ha.img, sp.tensanpham, sp.gia, sp.iddm
                        FROM sanpham sp, hinhanh ha, danhmuc dm
                        WHERE dm.madanhmuc=sp.iddm
                        AND sp.masanpham = ha.idsp 
                        AND ha.trangthai = 1 
                        and tensanpham LIKE '%".$tukhoa."%'";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="col bg-white border-0 text-white product-item">
                                <div class="card text-dark text-center relative" style="width:15rem;">
                                    <a href="#"><img src="../images/'.$row["img"].'" style="width: 15rem;" alt="..."></a>
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
                }
                
              
                
                ?>
            </div>
        </div>
    </div>

</div>
<?php
include_once("footer.php");
?>