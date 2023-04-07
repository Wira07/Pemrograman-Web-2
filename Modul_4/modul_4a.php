<?php
// Deklarasi Array
$arraymobil = array ("Mobillio", "Ertiga","Xpander","Avanza");
$arrayWarna = array ("Blue","Black","Red","Yellow","Green");
$arrayPabrikan = array();
$arrayPabrikan[] = "Honda";
$arrayPabrikan[] = "Sujuki";
$arrayPabrikan[] = "Mitsubishi";
$arrayPabrikan[] = "Toyota";
// pemanggilan
for ($i = 0; $i <= 3;
print $arraymobil[$i]. "Pabrikan ". $arrayPabrikan[$i] . "<br>",
$i++)
echo "Saya Baru saja membeli " .$arraymobil[0] . "Pabrikan " .$arrayPabrikan[0];
echo "<br><br>Menampilkan isi array dengan foreach : <br>";
foreach ($arraymobil as $mobil) {
    foreach ($arrayWarna as $warna)
    {
        echo "Do You like <font color=$warna>". $mobil. " ".$warna."</font>?<br>";
    }
}
?>