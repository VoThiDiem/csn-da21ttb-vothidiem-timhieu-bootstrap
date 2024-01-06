<?php
    include_once("header.php");
?>

<div class="main-content">
                <h3 class="title-page">
                    Thêm hình ảnh
                </h3>
                <form class="addPro w-50" action="xuly_them_hinhanh.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="tenanh">Ảnh sản phẩm</label>
                        <div class="custom-file">
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <!-- <input type="file" value="Upload Image" name="fileToUpload" class="custom-file-input"> -->
                        </div>
    
                    </div>  
                    <div class="form-group">
                        <label for="tensp">Tên sản phẩm:</label>
                        <select class="form-select" name="tensp" aria-label="Default select example">
                            <?php
                           
                            $sql = "SELECT * FROM sanpham";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = $result->fetch_assoc()) {
                                echo "<option value='".$row['masanpham']."'>".$row["tensanpham"]."</option>";
                              }
                            } else {
                              echo "0 results";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input " id="trangthai" name="trangthai" value="1" checked>
                        <label class="form-check-label" for="trangthai">Ảnh đại diện mặc định</label>
                    </div>

                <div class="form-group">
                    <button type="submit" name="sbThem" class="btn btn-primary px-3">Thêm</button>
                </div>
                </form>
            </div>
            <script>
                new DataTable('#example');
            </script>
<?php
   include_once("footer.php")
?>
