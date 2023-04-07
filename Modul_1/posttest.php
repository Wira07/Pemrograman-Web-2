<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest</title>
    <?php
    $p = 5;
    $l = 8;
    $t = 7;
    ?>
    <center>
        <img src="FKOM.png" alt="FKOM Jaya Jaya"><br>
        <b>FAKULTAS ILMU KOMPUTER<br> UNIVERSITAS KUNINGAN</b>
        <hr size="5"></hr>
        <b>OPERATOR PERHITUNGAN</b>
        <table border="1">

        <tr>
            <td>No</td>
            <td>Bangun Ruang</td>
            <td>Rumus</td>
            <td>Operasi</td>
            <td>Hasil Operasi</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Luas Permukaan Balok</td>
            <td>2x((px1)+(pxt)+(1xt))</td>
            <td><?= "2x((". $p ."x" . $l. ")+(".$p ."x". $t . ")+(".$l."x".$t."))"?></td>
            <td><?= 2*(($p*$l)+($p*$t)+($l*$t))?></td>
        </tr>
        </table>
    </center>
</head>
<body>
    
</body>
</html>