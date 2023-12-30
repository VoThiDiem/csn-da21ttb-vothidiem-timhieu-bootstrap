<?php
    include_once("header.php");
?>
<?php
 $ma=$img=$idsp=$trangthai="";
 if(isset($_GET["ma"])){
     $ma=$_GET["ma"];
 }
 //Select dữ liệu từ database
 $sql = "SELECT * FROM hinhanh WHERE mahinhanh = '$ma'";
 $result = $conn->query($sql);
 //Lấy dữ liệu hàng từ CSDL
 $row = $result->fetch_assoc();
    $img = $row["img"];
    $idsp = $row["idsp"];
    $trangthai=$row["trangthai"];
?>

<div class="main-content">
                <h3 class="title-page">
                    Sửa hình ảnh
                </h3>
                <form class="addPro " action="xuly_sua_hinhanh.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="id">Id:</label>
                        <input value="<?php echo $ma?>" type="text" class="form-control" name="id" id="id" readonly>
                    </div>
                <div class="form-group">
                        <label for="tenanh"><img name='hinhanh' class="w-25 mb-4" src='../../images/<?php echo $img;  ?>'></label>
                        
                        <div class="custom-file">
                            <input type="file"  name="fileToUpload" class="custom-file-input">
                        </div>
                        <div class="custom-file">
                            <input type="hidden" value="<?php echo $img?>" name="filehinh" class="custom-file-input">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="tensp">Tên sản phẩm:</label>
                        <select class="form-select" name="sanpham" aria-label="Default select example">
                            <?php
                            include_once("header.php");
                            $sql = "SELECT * FROM sanpham";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if($idsp==$row['masanpham']){
                                        echo "<option selected value='".$row['masanpham']."'>".$row["tensanpham"]."</option>";
                                    }else{
                                        echo "<option value='".$row['masanpham']."'>".$row["tensanpham"]."</option>";
                                    }
                                  
                                }
                              } else {
                                echo "0 results";
                              }
                            
                            ?>
                          </select>
                    </div>
                    <div class="form-check mb-3">
                        <?php
                            if($trangthai=="1")
                            {
                                ?>
                                    <input type="checkbox" class="form-check-input " id="trangthai" name="trangthai" checked>
                                <?php

                            }
                            else
                            {
                                ?>
                                <input type="checkbox" class="form-check-input " id="trangthai" name="trangthai" >
                                <?php

                            }
                        ?>
                    
                        <label class="form-check-label" for="trangthai">Ảnh đại diện mặc định</label>
                       
                    </div>

                <div class="form-group">
                    <button type="submit" name="sbSua" class="btn btn-primary px-3">Lưu</button>
                </div>
                </form>
            </div>
            <script>
                new DataTable('#example');
            </script>
<?php
   include_once("footer.php")
?>
