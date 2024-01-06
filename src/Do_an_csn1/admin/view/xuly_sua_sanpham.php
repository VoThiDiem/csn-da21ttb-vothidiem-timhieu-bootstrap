<?php
//Kết nối csdl
$ma=$tensp=$gia=$danhmuc=$mota=$motachitiet="";
if(isset($_POST["tensp"]) &&(isset($_POST["gia"]))&&(isset($_POST["danhmuc"]))&&(isset($_POST["mota"]))&&(isset($_POST["motachitiet"])))
{
    $tensp = $_POST["tensp"];
    $gia = $_POST["gia"];
    $danhmuc = $_POST["danhmuc"];
    $mota = $_POST["mota"];
    $motachitiet = $_POST["motachitiet"];
    $ma=$_POST["id"];
}
include_once("connect.php");

$sql="UPDATE sanpham SET tensanpham='$tensp',gia='$gia',iddm='$danhmuc', mota='$mota',motachitiet='$motachitiet'WHERE masanpham='$ma'";

if ($conn->query($sql) === TRUE) {
  //echo "Record updated successfully";
  header("Location:sanpham.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>