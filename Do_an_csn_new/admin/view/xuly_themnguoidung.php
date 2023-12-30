<?php
//Kết nối csdl
$ten=$matkhau=$diachi=$email="";
if(isset($_POST["ten"])&&(isset($_POST["matkhau"]))&&(isset($_POST["diachi"]))&&(isset($_POST["email"])))
{
    $ten = $_POST["ten"];
    $matkhau = md5($_POST["matkhau"]);
    $diachi = $_POST["diachi"];
    $email = $_POST["email"];
}
include_once("connect.php");
$sql = "INSERT INTO nguoidung (tennguoidung,matkhau,diachi,email) VALUES ('$ten','$matkhau','$diachi','$email')";

if ($conn->query($sql) === TRUE) {
 header("Location:nguoidung.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>