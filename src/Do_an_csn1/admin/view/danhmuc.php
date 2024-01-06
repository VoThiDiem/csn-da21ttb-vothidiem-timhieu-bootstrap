<?php
include_once("header.php");
?>
<div class="main-content">
          <h3 class="title-page text-center">Quản lí danh mục</h3>
          
          <div style="margin-left:100px;">
            <a href="them_danhmuc.php" class="btn btn-success mb-2 mt-4"
              ><i class="fa-solid fa-plus me-1"></i>Thêm mới</a>
          </div>
         
          <table id="example" class="table table-striped  mx-auto" style="width: 70%">
            <thead>
              <tr>
                <th class="col-3 ps-5 ">Id</th>
                <th class="col-3">Tên danh mục</th>
                <th class="col-5 text-center">Thao tác</th>
              </tr>
            </thead>
            <tbody>
          <?php
          //****Load dữ liệu lên****
          //Kết nối OK
          //Viết câu truy vấn
          $sql = "SELECT * FROM danhmuc";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td class='ps-5'>".$row["madanhmuc"]."</td>";
                echo "<td>".$row["tendanhmuc"]."</td>";
                echo  "<td class='text-center'>";
                ?>
                        <a href="sua_danhmuc.php?ma=<?php echo $row["madanhmuc"]?>" class="btn btn-warning"><i
                                class="fa-solid fa-pen-to-square"></i> Sửa</a>
                        <a href="xoa_danhmuc.php?ma=<?php echo $row["madanhmuc"]?>" onclick ="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger"><i
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
                <th class="ps-5">Id</th>
                <th>Tên danh mục</th>
                <th class="text-center">Thao tác</th>
              </tr>
            </tfoot>
          </table>
          </div> 
        </div>
      
    </div>
<?php
include_once "footer.php";
?>