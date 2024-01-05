<?php
include_once("header.php");
?>
<div class="main-content">
          <h3 class="title-page text-center">Quản lí người dùng</h3>
          <div class="my-4 ms-5">
            <a href="them_nguoidung.php" class="btn btn-success mb-2"
              ><i class="fa-solid fa-plus me-1"></i>Thêm mới</a
            >
          </div>
          <table id="example" class="table table-striped  table-responsive  mx-auto" style="width: 80%">
            <thead>
              <tr>
                <th>Id</th>
                <th>Tên người dùng</th>
                <th>Mật khẩu</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
          <?php
          //****Load dữ liệu lên****
          //Kết nối OK
          //Viết câu truy vấn
          $sql = "SELECT * FROM nguoidung";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["manguoidung"]."</td>";
                echo "<td>".$row["tennguoidung"]."</td>";
                echo "<td>*************</td>";
                echo "<td>".$row["diachi"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo  "<td>";
                ?>
                        <a href="sua_nguoidung.php?ma=<?php echo $row["manguoidung"]?>" class="btn btn-warning"><i
                                class="fa-solid fa-pen-to-square"></i> Sửa</a>
                        <a href="xoa_nguoidung.php?ma=<?php echo $row["manguoidung"]?>" onclick ="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger"><i
                                class="fa-solid fa-trash"></i> Xóa</a>
                <?php
                      echo "</td>";
                      echo "</tr>"; 
           }
          } else {
            echo "0 results";
          }
          ?>
            </tbody>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Tên người dùng</th>
                <th>Mật khẩu</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Thao tác</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
<?php
include_once "footer.php";
?>