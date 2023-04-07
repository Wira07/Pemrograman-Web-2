<title>Tugas Mandiri - II</title>
<?php
echo "<center>Perhitungan Gaji</center><br>";

echo "
    <form id='form1'name='form1' method='post' action='' enctype='multipart/form-data'>
        <table width='350' border='0' align='center'>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><label>
                    <input type='text' name='nama' id='nama'>
                </label></td>
            </tr>
             <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><label>
                    <select name='jabatan' id='jabatan'>
                        <option value='1'>Dosen Tetap</option>
                        <option value='2'>Dosen Tidak Tetap</option>
                        <option value='3'>Asisten Dosen</option>
                    </select>
                </label></td>
            </tr>
            <tr>
                <td colspan='3' align='center'>
                    <input type='submit' name='hitung' value='Hitung'>
                </td>
            </tr>
        </table>
    </form>";

if (isset($_POST['hitung'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['prodi'];
    switch ($jabatan) {
        case 'tetap':
            echo "
            <center>
                Nama    : $nama <br>
                Gapok   : Rp. 1.500.000
            </center>
            ";
            break;
        case 'tidaktetap':
            echo "
            <center>
                Nama    : $nama <br>
                Gapok   : Rp. 1.000.000
            </center>
            ";
            break;
        case 'asisten':
            echo "
            <center>
                Nama    : $nama <br>
                Gapok   : Rp. 800.000
            </center>
            ";
            break;
    }
} else {
    echo "<center>Masukan Nama dan Pilih Jabatan</center>";
}
