<?php
    include_once("header.php");
?>

<div class="main-content">
                <h3 class="title-page">
                    Thêm danh mục
                </h3>
                <form class="addPro w-50 " action="xuly_them_danhmuc.php" method="POST">
                <div class="form-group">
                        <label for="tendanhmuc">Tên danh mục:</label>
                        <input type="text" class="form-control" name="tendanhmuc" id="tendanhmuc" placeholder="Nhập tên danh mục">
                    </div>
                <div class="form-group">
                    <button type="submit" name="them_danhmuc" class="btn btn-primary px-3">Thêm </button>
                </div>
                </form>
            </div>
            <script>
                new DataTable('#example');
            </script>
<?php
   include_once("footer.php")
?>
