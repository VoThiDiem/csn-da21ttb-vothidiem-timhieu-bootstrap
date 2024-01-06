<?php
//Kết nối csdl
$tendanhmuc=$ma="";
if(isset($_POST["tendanhmuc"]))
{
    $tendanhmuc = $_POST["tendanhmuc"];
    $ma = $_POST["id"];
}
include_once("connect.php");

$sql="UPDATE danhmuc SET tendanhmuc='$tendanhmuc' WHERE madanhmuc='$ma'";

if ($conn->query($sql) === TRUE) {
  //echo "Record updated successfully";
  header("Location:danhmuc.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>