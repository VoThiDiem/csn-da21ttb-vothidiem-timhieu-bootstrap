<?php
    include_once("header.php");
?>
<?php
    //Lấy dữ liệu (ma lấy từ địa chỉ href và sử dụng GET)
    $ma=$tensp=$gia=$luotxem=$danhmuc=$mota=$motachitiet="";
    if(isset($_GET["ma"])){
        $ma=$_GET["ma"];
    }
    //Select dữ liệu từ database
    $sql = "SELECT * FROM sanpham WHERE masanpham = '$ma'";
    $result = $conn->query($sql);
    //Lấy dữ liệu hàng từ CSDL
    $row = $result->fetch_assoc();
    $tensp = $row["tensanpham"];
    $gia = $row["gia"];
    $danhmuc = $row["iddm"];
    $mota=$row["mota"];
    $motachitiet=$row["motachitiet"];
?>
<div class="main-content">
                <h3 class="title-page">
                    Sửa sản phẩm
                </h3>
                <form class="addPro" action="xuly_sua_sanpham.php" method="POST">
                <div class="form-group">
                        <label for="tensp">Id:</label>
                        <input value="<?php echo $ma?>" type="text" class="form-control" name="id" id="id" readonly>
                    </div>
                <div class="form-group">
                        <label for="tensp">Tên sản phẩm:</label>
                        <input value="<?php echo $tensp?>" type="text" class="form-control" name="tensp" id="tensp" >
                    </div>
                    <div class="form-group">
                        <label for="gia">Giá:</label>
                        <input value="<?php echo $gia ?>" type="text" class="form-control" name="gia" id="gia" >
                    </div>
                    
                    <div class="form-group">
                        <label for="categories">Danh mục:</label>
                        <select class="form-select" name="danhmuc" aria-label="Default select example">
                            <?php
                            include_once("header.php");
                            $sql = "SELECT * FROM danhmuc";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if($danhmuc==$row['madanhmuc']){
                                        echo "<option selected value='".$row['madanhmuc']."'>".$row["tendanhmuc"]."</option>";
                                    }else{
                                        echo "<option value='".$row['madanhmuc']."'>".$row["tendanhmuc"]."</option>";
                                    }
                                  
                                }
                              } else {
                                echo "0 results";
                              }
                            
                            ?>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="mota">Mô tả:</label>
                        <input value="<?php echo $mota?>" type="text" class="form-control" name="mota" id="mota" >
                    </div>

                    <div class="form-group">
                        <label for="motachitiet">Mô tả chi tiết:</label>
                        <textarea name="motachitiet" id="motachitiet" rows="10" cols="80"><?php echo $motachitiet; ?></textarea>
                    </div>

                <div class="form-group">
                    <button type="submit" name="them_sanpham" class="btn btn-primary px-3">Lưu</button>
                </div>
                </form>
            </div>
            <script>
                new DataTable('#example');
            </script>
             <script> CKEDITOR.replace('motachitiet');</script>
<?php
   include_once("footer.php")
?>
