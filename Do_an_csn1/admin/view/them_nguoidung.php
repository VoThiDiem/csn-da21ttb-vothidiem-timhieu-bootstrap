<?php
    include_once("header.php");
?>

<div class="main-content">
                <h3 class="title-page">
                    Thêm người dùng
                </h3>
                <form class="addPro w-50" action="xuly_themnguoidung.php" method="POST">
                <div class="form-group">
                        <label for="ten">Tên người dùng:</label>
                        <input type="text" class="form-control" name="ten" id="ten" placeholder="Nhập tên người dùng">
                    </div>
                    <div class="form-group">
                        <label for="matkhau">Mật khẩu:</label>
                        <input type="password" class="form-control" name="matkhau" id="matkhau" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="diachi">Địa chỉ:</label>
                        <input type="text" class="form-control" name="diachi" id="diachi" placeholder="Nhập địa chỉ">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Nhập email">
                    </div>
                <div class="form-group">
                    <button type="submit" name="them_nguoidung" class="btn btn-primary px-3">Thêm</button>
                </div>
                </form>
            </div>
            <script>
                new DataTable('#example');
            </script>
<?php
   include_once("footer.php")
?>
