<?php
    include_once("header.php");
?>
<?php
    //Lấy dữ liệu (ma lấy từ địa chỉ href và sử dụng GET)
    $ma=$tendanhmuc="";
    if(isset($_GET["ma"])){
        $ma=$_GET["ma"];
    }
    //Select dữ liệu từ database
    $sql = "SELECT * FROM danhmuc WHERE madanhmuc = '$ma'";
    $result = $conn->query($sql);
    //Lấy dữ liệu hàng từ CSDL
    $row = $result->fetch_assoc();
    $tendanhmuc = $row["tendanhmuc"];
    

?>

<div class="main-content">
                <h3 class="title-page">
                    Sửa danh mục
                </h3>
                <form class="addPro w-50" action="xuly_sua_danhmuc.php" method="POST">
                <div class="form-group">
                        <label for="tendanhmuc">Id danh mục:</label>
                        <input value="<?php echo $ma;?>" type="text" class="form-control" name="id" id="id" readonly >
                    </div>
                <div class="form-group">
                        <label for="tendanhmuc">Tên danh mục:</label>
                        <input value="<?php echo $tendanhmuc;?>" type="text" class="form-control" name="tendanhmuc" id="tendanhmuc">
                    </div>
                <div class="form-group">
                    <button type="submit" name="sua_danhmuc" class="btn btn-primary px-3">Lưu</button>
                </div>
                </form>
            </div>
            <script>
                new DataTable('#example');
            </script>
<?php
   include_once("footer.php")
?>
