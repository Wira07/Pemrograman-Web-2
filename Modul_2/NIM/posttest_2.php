<?php
 $sepeda = "Polygon Siskiu D5";
    switch($sepeda) {
        case "Polygon Siskiu D5";
        $harga = 95000000;
        break;
        case "Polygon Siskiu D7";
        $harga = 190000000;
        break;
        case "Polygon Siskiu T8";
        $harga = 250000000;
        break;
        case "Polygon Rayz 3";
        $harga = 60000000;
        break;
        case "Polygon Rapid";
        $harga = 30000000;
        break;
        default: $harga = 0;
    }
    echo "Harga Sepeda $sepeda adalah Rp. ". number_format($harga);
?>