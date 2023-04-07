<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check Apabila Filw Sudah Ada
if (file_exists($target_file)) {
    echo "Maaf, File sudah ada.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Maaf, File terlalu besar.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Maaf, hanya JPG, JPEG, PNG & GIF files yang diijinkan";
    $uploadOk = 0;
}
// Jika gagal Upload, karena error
if ($uploadOk == 0) {
    echo "Maaf, File tidak terupload.";
// jika Semuanya benar
} 
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " berhasil di uploaded.";
    } else {
        echo "Maaf, File gagal di upload";
    }   
}
?>