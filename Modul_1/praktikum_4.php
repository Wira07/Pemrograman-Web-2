<?php
define("NAMA","WIRA SUKMA SAPUTRA");
define("NIM","20210810075");

echo "Nama : " . NAMA;
echo "<br> NIM : ".NIM."<br>";

$gaji = 1000000;
$pajak  = 0.1;
$gaji_bersih = $gaji - ($gaji * $pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $gaji_bersih <br>";

?>