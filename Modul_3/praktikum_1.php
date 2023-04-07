<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1</title>
</head>

<body>
    <?php
    echo "<center><b>FAKULTAS ILMU KOMPUTER<br>";
    echo "UNIVERSITAS KUNINGAN<br>";
    echo "<hr size='5'></hr>";
    print "INPUT DATA MAHASISWA 2014 </center><br>";
    echo "
        <center>
        <FORM ACTION='' METHOD='POST' NAME='Forminput'>
        Nama Anda : <INPUT TYPE='TEXT' NAME='nama'><br>
        <INPUT TYPE='SUBMIT' NAME='Input' VALUE='Input'>
        </FORM>";
    if (isset($_POST['Input'])) {
        $nama = $_POST['nama'];
        echo "Nama Anda : <b>$nama</b></center>";
    }
    ?>
</body>

</html>