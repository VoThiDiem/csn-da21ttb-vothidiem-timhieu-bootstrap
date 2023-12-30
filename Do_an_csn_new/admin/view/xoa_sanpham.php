<?php
//Kết nối csdl
include_once("connect.php");
$ma="";
if(isset($_GET["ma"]))
{
    $ma = $_GET["ma"];
}

//2. Viết câu truy vấn xóa

$sqlhinhanh = "DELETE FROM hinhanh WHERE idsp='$ma';";
if ($conn->query($sqlhinhanh) === TRUE) {
  $sqlsanpham .= "DELETE FROM sanpham  WHERE masanpham='$ma';";
  if ($conn->query($sqlsanpham) === TRUE) {
      header("Location:sanpham.php");
  }else{
    echo "Error deleting record: " . $conn->error;
  }

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>