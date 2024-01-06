<?php
    include_once("header.php");
?>
<?php
    //Lấy dữ liệu (ma lấy từ địa chỉ href và sử dụng GET)
    $ma=$ten=$matkhau=$diachi=$email="";
    if(isset($_GET["ma"])){
        $ma=$_GET["ma"];
    }
    //Select dữ liệu từ database
    $sql = "SELECT * FROM nguoidung WHERE manguoidung = '$ma'";
    $result = $conn->query($sql);
    //Lấy dữ liệu hàng từ CSDL
    $row = $result->fetch_assoc();
    $ten = $row["tennguoidung"];
    $matkhau = $row["matkhau"];
    $diachi = $row["diachi"];
    $email = $row["email"];

?>

<div class="main-content">
                <h3 class="title-page">
                    Sửa người dùng
                </h3>
                <form class="addPro w-50" action="xuly_sua_nguoidung.php" method="post">
                <div class="form-group">
                        <label for="ten">Id:</label>
                        <input value="<?php echo $ma?>" type="text" class="form-control" name="id" id="id" readonly >
                    </div>
                <div class="form-group">
                        <label for="ten">Tên người dùng:</label>
                        <input value="<?php echo $ten?>" type="text" class="form-control" name="ten" id="ten" readonly >
                    </div>
                    <div class="form-group">
                        <label for="matkhau">Mật khẩu:</label>
                        <input value="<?php echo $matkhau?>" type="text" class="form-control" name="matkhau" id="matkhau" readonly>
                    </div>
                    <div class="form-group">
                        <label for="diachi">Địa chỉ:</label>
                        <input value="<?php echo $diachi?>" type="text" class="form-control" name="diachi" id="diachi">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input value="<?php echo $email?>" type="text" class="form-control" name="email" id="email">
                    </div>
                <div class="form-group">
                    <button type="submit" name="btnLuu" class="btn btn-primary">Lưu</button>
                </div>
                </form>
            </div>
            <script>
                new DataTable('#example');
            </script>
<?php
   include_once("footer.php")
?>
