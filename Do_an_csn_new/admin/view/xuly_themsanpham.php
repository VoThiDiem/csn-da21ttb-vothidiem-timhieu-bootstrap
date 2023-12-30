<?php
//Kết nối csdl
$tensp=$gia=$luotxem=$danhmuc=$mota="";
if(isset($_POST["tensp"])&&(isset($_POST["gia"]))&&(isset($_POST["danhmuc"]))&&(isset($_POST["mota"]))&&(isset($_POST["motachitiet"])))
{
    $tensp = $_POST["tensp"];
    $gia = $_POST["gia"];
    
    $danhmuc = $_POST["danhmuc"];
    $mota = $_POST["mota"];
    $motachitiet = $_POST["motachitiet"];
}
include_once("connect.php");
$sql = "INSERT INTO sanpham (tensanpham,gia,iddm,mota,motachitiet) VALUES ('$tensp','$gia','$danhmuc','$mota','$motachitiet')";

if ($conn->query($sql) === TRUE) {
 header("Location:sanpham.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>