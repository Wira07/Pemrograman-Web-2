<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Gaji - Wira Sukma Saputra</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f1f1f1;
    }

    button {
        background-color: red;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 5px 15px;
    }
    </style>
    <?php
    if (isset($_POST['hitung'])) {
            $gol = $_POST['gol'];

            if ($gol == 'I'){
                $gaji_pokok = 500000;
                $tunjangan = 155000;
                $potongan = (10/100) * $gaji_pokok;
            } else if ($gol == "II") {
                $gaji_pokok = 750000;
                $tunjangan = 155000;
                $potongan = (7.5/100) * $gaji_pokok;
            } else if ($gol == "III") {
                $gaji_pokok = 1000000;
                $tunjangan = 146000;
                $potongan = (5/100) * $gaji_pokok;
            }
            $gaji_bersih = $gaji_pokok + $tunjangan + $potongan;
    }
    ?>
</head>

<body>
    <form action="" method="POST">
        <center>
            <b>PERHITUNGAN GAJI KARYAWAN</b>
            <table>
                <tr>
                    <td>Golongan</td>
                    <td>:</td>
                    <td>
                        <select name="gol">
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="hitung"><b>Hitung</b></button></td>
                </tr>
                <tr>
                    <td>Gaji Pokok</td>
                    <td>:</td>
                    <td align="right"><?= @$gaji_pokok ?></td>
                </tr>
                <tr>
                    <td>Tunjangan</td>
                    <td>:</td>
                    <td align="right"><?= @$tunjangan ?></td>
                </tr>
                <tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td align="right"><?= @$potongan ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>================</td>
                </tr>
                <tr>
                    <td>Gaji Bersih</td>
                    <td>:</td>
                    <td align="right"><?= @$gaji_bersih ?></td>
            </table>
        </center>
    </form>
</body>

</html>