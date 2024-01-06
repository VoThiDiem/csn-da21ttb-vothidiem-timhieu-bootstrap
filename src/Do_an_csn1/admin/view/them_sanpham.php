<?php
    include_once("header.php");
?>

<div class="main-content">
                <h3 class="title-page">
                    Thêm sản phẩm
                </h3>
                <form class="addPro " action="xuly_themsanpham.php" method="POST">
                <div class="form-group">
                        <label for="tensp">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="tensp" id="tensp" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="gia">Giá:</label>
                        <input type="text" class="form-control" name="gia" id="gia" placeholder="Nhập giá">
                    </div>
                    
                    <div class="form-group">
                        <label for="categories">Danh mục:</label>
                        <select class="form-select" name="danhmuc" aria-label="Default select example">
                            <?php
                            $sql = "SELECT * FROM danhmuc";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = $result->fetch_assoc()) {
                                echo "<option value='".$row['madanhmuc']."'>".$row["tendanhmuc"]."</option>";
                              }
                            } else {
                              echo "0 results";
                            }
                            ?>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="mota">Mô tả:</label>
                        <input type="text" class="form-control" name="mota" id="mota" placeholder="Nhập mô tả">
                    </div>
                    <div class="form-group">
                        <label for="motachitiet">Mô tả chi tiết:</label>
                        <textarea  name="motachitiet" id="motachitiet" rows="10" cols="80"></textarea>
                    </div>
                <div class="form-group">
                    <button type="submit" name="them_sanpham" class="btn btn-primary px-3">Thêm</button>
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
