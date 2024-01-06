<?php
include_once("header.php");
?>
<div class="main-content">
          <h3 class="title-page text-center">Quản lí sản phẩm</h3>
          <div class="mt-4 mb-2 ms-5">
            <a href="them_sanpham.php" class="btn btn-success mb-2"
              ><i class="fa-solid fa-plus me-1"></i>Thêm mới</a
            >
          </div>
          <table id="example" class="table table-striped  table-responsive  mx-auto" style="width: 80%">
            <thead>
              <tr>
                <th class='col' >Id</th>
                <th class='col' >Tên sản phẩm</th>
                <th class='col-2'>Giá</th>
                <th class='col' >Tên danh mục</th>
                <th class='col-2' >Thao tác</th>
              </tr>
            </thead>
            <tbody>
          <?php
          //****Load dữ liệu lên****
          //Kết nối OK
          //Viết câu truy vấn
          $sql = "SELECT sp.masanpham, sp.tensanpham, sp.gia,sp.mota, dm.tendanhmuc FROM sanpham sp, danhmuc dm WHERE sp.iddm=dm.madanhmuc  ORDER BY masanpham DESC";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                echo "<tr>";
                echo "<td class='col'>".$row["masanpham"]."</td>";
                echo "<td class='col '>".$row["tensanpham"]."</td>";
                echo "<td class='col'>".$row["gia"]."</td>";
                echo "<td class='col'>".$row["tendanhmuc"]."</td>";
                
                echo  "<td class='col'>";
                ?>
                        <a href="sua_sanpham.php?ma=<?php echo $row["masanpham"]?>" class="btn btn-warning"><i
                                class="fa-solid fa-pen-to-square"></i> Sửa</a>
                        <a href="xoa_sanpham.php?ma=<?php echo $row["masanpham"]?>" onclick ="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger"><i
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
                <th class='col' >Id</th>
                <th class='col' >Tên sản phẩm</th>
                <th class='col-2'>Giá</th>
                <th class='col' >Tên danh mục</th>
                <th class='col-2' >Thao tác</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
<?php
include_once "footer.php";
?>