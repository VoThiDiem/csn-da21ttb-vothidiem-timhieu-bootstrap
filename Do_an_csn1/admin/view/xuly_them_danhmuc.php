<?php
//Kết nối csdl
$tendanhmuc="";
if(isset($_POST["tendanhmuc"]))
{
    $tendanhmuc = $_POST["tendanhmuc"];
   
}
include_once("connect.php");
$sql = "INSERT INTO danhmuc(tendanhmuc) VALUES ('$tendanhmuc')";

if ($conn->query($sql) === TRUE) {
 header("Location:danhmuc.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>