<?php
// fungsi tanpa parameter
function genap() //deklarasi fungsi
{
    for ($i = 0; $i <= 50; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}
echo "<b>Bilangan Genap</b></br>";
genap(); //pemanggilan fungsi
echo "<br><br>";
// fungsi dengan parameter
function ganjil($awal, $akhir) //deklarasi fungsi
{
    for ($i = $awal; $i < $akhir; $i++) {
        if ($i % 2 == 1) {
            echo $i . " ";
        }
    }
}
echo "<b>Bilangan Ganjil</b></br>";
$a = 10; //isi nilai parameter
$b = 50; //isi nilai parameter
// Cetak Fungsi
echo "<br><b>Bilangan ganjil dari $a sampai $b : </b>";
ganjil($a, $b); //pemanggilan fungsi
?>