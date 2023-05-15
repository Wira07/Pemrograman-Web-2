<?php
$database="db_ecomerce";
$alamat="localhost";
$user="root";
$pass="";
$koneksi=mysqli_connect("$alamat","$user","","$database");
if (mysqli_connect_error())
{
    echo "Koneksi Database Gagal:".mysqli_connect_error();
}
else {
    echo "Koneksi OK";
}
?>