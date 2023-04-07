<?php
session_start();
$jumlah = 0;
$nim = array();
$nama = array();
$no = array();
extract($_POST);
if (isset($submit)) {
    $_SESSION['jumlah'] = $_POST['jumlah'];
    echo "<h3>INPUT DATA MAHASISWA</h3>";
    echo "<form method=POST>
<table>
<thead>
<td>No</td>
<td>NIM</td>
<td>Nama</td>
<td>No Telp</td>
</thead>";
    for ($i = 1; $i <= $jumlah; $i++) {
        echo "<tr>
        <td>$i</td>
        <td><input type=text name=nim[$i]></td>
        <td><input type=text name=nama[$i]></td>
        <td><input type=text name=no[$i]></td>
        </tr>";
    }
    echo "<tr>
    <td colspan=4 align=right><input type=submit name=tampil value=Tampilkan></td>
    </tr>
</table>
<form>";
} elseif (isset($_POST['tampil'])) {
    array_multisort ($nim, $nama, $no);
    for ($i = 0; $i < $_SESSION['jumlah']; $i++) {
        echo "Nomor Induk = $nim[$i] Nama = $nama[$i] Telp = $no[$i] <br>";
    }
} else {
    echo "<form method=POST action=tugas1.php>
        Masukan Jumlah Data <input type=text name=jumlah>
<input type=submit name=submit value=Ok>
</form>";
}
?>