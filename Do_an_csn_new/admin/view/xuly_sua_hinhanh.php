<?php
include_once("connect.php");

$tensp = $image = $ma=$trangthai = "";

if (isset($_POST["sbSua"])) {
    $image = $_FILES["fileToUpload"]["name"];
    $path_anh = $_POST["filehinh"];
    $tensp = $_POST["sanpham"];
    $ma = $_POST["id"];
    $trangthai=($_POST["trangthai"]==true)?1:0;
    $sql="";
    //echo $path_anh;
    //upload file
    echo "có chưa".$_FILES["fileToUpload"]["name"];
    if(isset($_FILES["fileToUpload"]["name"])&&!empty($_FILES["fileToUpload"]["name"]))
    {
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        

        // Check if file already exists
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }
        $sql = "UPDATE hinhanh SET img='$image', idsp='$tensp', trangthai='$trangthai'  WHERE mahinhanh ='$ma'";
    }
    else
    {
        
        $sql = "UPDATE hinhanh SET idsp='$tensp',trangthai='$trangthai' WHERE mahinhanh ='$ma'";
    }
    echo $sql;
    if ($conn->query($sql) === TRUE) {
        header("Location:hinhanh.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
