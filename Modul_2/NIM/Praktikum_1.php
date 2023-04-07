<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum_1</title>
</head>

<body>
    <?php
    $NA = 70;

    if($NA >= 90) 
        $HM = 'A';
    else if($NA >= 70)
        $HM = 'B';
    else if($NA >= 60)
        $HM = 'C';
    else if($NA >= 50)
        $HM = 'D';
    else if($NA < 50)
        $HM = 'E';

    echo "Nilai Anda = $NA <br>
        Huruf Mutu = $HM";
    ?>
</body>

</html>