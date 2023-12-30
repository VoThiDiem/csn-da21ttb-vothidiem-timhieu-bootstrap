<?php
//Kết nối csdl
$ma="";
if(isset($_GET["ma"]))
{
    $ma = $_GET["ma"];
}
include_once("connect.php");
//2. Viết câu truy vấn xóa
    $sql="DELETE FROM nguoidung WHERE manguoidung='$ma';";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location:nguoidung.php");
  } else {
    echo "Error deleting record: " . $conn->error;
  }
$conn->close();
?>