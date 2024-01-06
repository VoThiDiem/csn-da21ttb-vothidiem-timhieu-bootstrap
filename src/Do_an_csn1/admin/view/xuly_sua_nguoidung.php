<?php
//Kết nối csdl
$ten=$ma=$matkhau=$diachi=$email="";
if(isset($_POST["ten"]) &&(isset($_POST["matkhau"]))&&(isset($_POST["diachi"]))&&(isset($_POST["email"])))
{
    $ten = $_POST["ten"];
    $matkhau = $_POST["matkhau"];
    $diachi = $_POST["diachi"];
    $email = $_POST["email"];
    $ma = $_POST["id"];
}
include_once("connect.php");

$sql="UPDATE nguoidung SET tennguoidung='$ten',matkhau='$matkhau',diachi='$diachi',email='$email' WHERE manguoidung='$ma'";

if ($conn->query($sql) === TRUE) {
  //echo "Record updated successfully";
  header("Location:nguoidung.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>