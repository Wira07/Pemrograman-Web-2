<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum_2</title>
</head>

<body>
    <?php
        echo "<center><b>FAKULTAS ILMU KOMPUTER</b>";
        echo "<center><b>UNIVERSITAS KUNINGAN</b>";
        echo "<hr size='5'</hr>";
        print "DATA MAHASISWA 2021</center>";
        // deklarasi variable
        $no = 1;
        $nim = 20210810075;
        $nama = "Wira Sukma Saputra";
        $jk = "Laki - Laki";
        $status='Aktif';
        echo "<table border='1' align='center'>
        <tr>
            <td>No</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>JK</td>
            <td>Status</td>
        </tr>
        <tr>
            <td>.$no.</td>
            <td>.$nama.</td>
            <td>. $nim.</td>
            <td>.$jk.</td>
            <td>.$status.</td>
        </tr>
        </table>";
        ?>
</body>

</html>