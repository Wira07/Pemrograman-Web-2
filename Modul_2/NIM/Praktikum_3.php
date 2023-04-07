<?php
$day = date("D");
$wkt = date("D-M-Y");
switch($day) {
    case 'Sun' : $hari = "Minggu"; break;
    case 'Mon' : $hari = "Senin"; break;
    case 'Tue' : $hari = "Selasa"; break;
    case 'Wed' : $hari = "Rabu"; break;
    case 'Thu' : $hari = "Kamis"; break;
    case 'Fri' : $hari = "Jumat"; break;
    case 'Sat' : $hari = "Sabtu"; break;
    default : $hari = "Kiamat"; break;
}
echo "Hari ini hari <b>$hari</b><br>";
echo "Lengkapnya <b>$wkt</b>";