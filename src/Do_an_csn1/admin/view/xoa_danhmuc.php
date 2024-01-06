
<?php
//Kết nối csdl
include_once("connect.php");
$ma=$idsp="";
if(isset($_GET["ma"]))
{
    $ma = $_GET["ma"];
}

//2. Viết câu truy vấn xóa
$sql = "SELECT * FROM sanpham WHERE iddm = '$ma'";
$result = $conn->query($sql);

//Lấy dữ liệu hàng từ CSDL
if($result->num_rows>0)//nêu danh muc có sản phẩm thì xóa sản phẩm trước
{
  while($r1=$result->fetch_assoc())
  {
    $query1 ="select * from hinhanh where idsp = '".$r1["masanpham"]."'";//Chọn tất cả hình của sản phẩm
    echo $query1;
    $kq=$conn->query($query1);
    if($kq->num_rows>0)//Cố hình
    {
      $query="";
      while($t = $kq->fetch_assoc())
      {
        $query.="DELETE FROM hinhanh WHERE mahinhanh = '".$t["mahinhanh"]."';";
      }
      
      echo "=====".$query;
      $conn->multi_query($query);//Đã xóa hết ảnh, tiến hành xóa sản phẩm
      
    }
    $conn->query("DELETE FROM sanpham WHERE masanpham = '".$r1["masanpham"]."'");//Xóa sản phẩm sau khi xóa hết hình
    
  }
  //Sau khi xóa hết sản phẩm tiến hành xóa danh mục
  if ($conn->query("DELETE FROM danhmuc WHERE madanhmuc = '".$ma."'") === TRUE) {
    header("Location:danhmuc.php");
  }
}
else{//Danh mục không có sản phẩm thì xóa danh mục
  
  if ($conn->query("DELETE FROM danhmuc WHERE madanhmuc = '".$ma."'") === TRUE) {
    header("Location:danhmuc.php");
  }
}


$conn->close();
?>