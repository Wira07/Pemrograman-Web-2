<?php
$mahasiswa['Ani'] = 80;
$mahasiswa['Otim'] = 90;
$mahasiswa['Sri'] = 75;
$mahasiswa['Budi'] = 85;
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($mahasiswa);
echo "</pre>";

$mahasiswa['Ani'] = 80;
$mahasiswa['Otim'] = 85;
$mahasiswa['Sri'] = 90;
$mahasiswa['Budi'] = 75;
echo "Array setelah pengurutan dengan ksort()";
echo "<pre>";
print_r($mahasiswa);
echo "</pre>";


$mahasiswa['Ani'] = 75;
$mahasiswa['Otim'] = 90;
$mahasiswa['Sri'] = 85;
$mahasiswa['Budi'] = 80;
echo "Array setelah pengurutan dengan krsort()";
echo "<pre>";
print_r($mahasiswa);
echo "</pre>";

?>