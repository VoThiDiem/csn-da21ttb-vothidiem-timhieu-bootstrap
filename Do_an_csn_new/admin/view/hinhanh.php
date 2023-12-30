<?php
include_once("header.php");
?>
<div class="main-content">
          <h3 class="title-page text-center">Quản lí hình ảnh</h3>
          <div class="mt-4 mb-2 ms-5">
            <a href="them_hinhanh.php" class="btn btn-success mb-2"
              ><i class="fa-solid fa-plus me-1"></i>Thêm mới</a
            >
          </div>
          <table id="example" class="table table-striped  table-responsive  mx-auto" style="width: 80%">
            <thead>
              <tr>
                <th class="col-2">Id</th>
                <th class="col-2">Hình ảnh</th>
                <th class="col">Tên sản phẩm</th>
                <th class="col-2">Trạng thái</th>
                <th class="col-2">Thao tác</th>
              </tr>
            </thead>
            <tbody>
          <?php
          //****Load dữ liệu lên****
          //Kết nối OK
          //Viết câu truy vấn
          $sql = "SELECT ha.mahinhanh, ha.idsp, ha.img, sp.tensanpham, sp.masanpham,ha.trangthai FROM hinhanh ha, sanpham sp WHERE ha.idsp=sp.masanpham ORDER BY mahinhanh DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["mahinhanh"]."</td>";
                echo "<td><img width='20%' height='20%' src='../../images/".$row['img']."'></td>";
                echo "<td>".$row["tensanpham"]."</td>";
                echo "<td>".$row["trangthai"]."</td>";
                echo "<td>";
               
                ?>
                        <a href="sua_hinhanh.php?ma=<?php echo $row["mahinhanh"]?>" class="btn btn-warning"><i
                                class="fa-solid fa-pen-to-square"></i> Sửa</a>
                        <a href="xoa_hinhanh.php?ma=<?php echo $row["mahinhanh"]?>" onclick ="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger"><i
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
                <th class="col">Id</th>
                <th class="col">Hình ảnh</th>
                <th class="col">Tên sản phẩm</th>
                <th class="col">Trạng thái</th>
                <th class="col">Thao tác</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
<?php
include_once "footer.php";
?>