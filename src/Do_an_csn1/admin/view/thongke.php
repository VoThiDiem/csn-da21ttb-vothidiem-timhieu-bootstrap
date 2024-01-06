<?php
include_once("header.php");
?>
<div class="main-content">
          <h3 class="title-page text-center">Thống kê sản phẩm</h3>
         
          <table id="example" class="table table-striped  mx-auto" style="width: 50%">
            <thead>
              <tr>
                <th class="col ps-5 ">Tên danh mục</th>
                <th class="col">Số lượng</th>
              </tr>
            </thead>
            <tbody>
          <?php
          //****Load dữ liệu lên****
          //Kết nối OK
          //Viết câu truy vấn
          $sql = "SELECT dm.tendanhmuc, count(sp.masanpham)as soluong FROM danhmuc dm, sanpham sp WHERE dm.madanhmuc=sp.iddm GROUP BY dm.madanhmuc";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                
                echo "<tr>";
                echo "<td class='ps-5'>".$row["tendanhmuc"]."</td>";
                echo "<td class='ps-4'>".$row["soluong"]."</td>";
                echo  "<td class='text-center'>";
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
                <th class="ps-5">Tên danh mục</th>
                <th>Số lượng</th>
              </tr>
            </tfoot>
          </table>
          </div> 
        </div>
    </div>
<?php
include_once "footer.php";
?>