<?php
    extract($_POST);
    $passmd=md5($pass);
    if($submit=="submit")
    {
        $tambah = mysqli_query($koneksi, "INSERT INTO tbl_member VALUES ('','$nama_member', '$jk', '$alamat', '$nope', '$email', '$passmd')")
        or die (mysqli_error($koneksi));
        if ($tambah) {
            $msg = "Anda Sudah Terdaftar Menjadi Member";
        } else {
            $msg = "Register Member Gagal";
        }
        echo "$msg";
    }
    // $sql = "INSERT INTO member (nama_member, jk, alamat, no_hp, email, password) VALUES ('$nama_member', '$jk', '$alamat', '$nope', '$email', '$pass')";
  
?>