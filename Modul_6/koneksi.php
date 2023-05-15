<?php
$dbhost="localhost";// alamat web server
$dbuser="root";// username mysql
$dbpassword="";// password mysql
$database="db_ecomerce";// nama database
$koneksi=mysqli_connect("$dbhost","$dbuser","","$database");
if (mysqli_connect_errno())
{
    echo "Koneksi Database Gagal:".mysqli_connect_error();
}
?>