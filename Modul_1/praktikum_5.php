<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum_5</title>
    <?php
    echo "<center><img src='FKOM.png'><br><b>FAKULTAS ILMU KOMPUTER</br>";
    echo "UNIVERSITAS KUNINGAN</b>";
    echo "<hr size='5'</hr>";
    print "<b>Manipulasi String</b></center><br>";

    $kalimat = "Belajar Pemrograman PHP";
    echo $kalimat;
    echo "<br>Jumlah Karakter : ". strlen($kalimat);
    echo "<br>Jumlah Kata : ". str_word_count($kalimat);
    echo "<br>Reverse Kata belajar Menjadi : ".str_replace("Belajar","Ngoding",$kalimat);
    
    ?>
</head>

<body>

</body>

</html>