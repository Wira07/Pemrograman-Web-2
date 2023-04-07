<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">Masukan Jumlah Data</label>
        <input type="number" name="jumlah_data">
        <button name="submit">OK</button>
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) :
    $jumlah = $_POST['jumlah_data'];
    $no = 1;
?>
<h3>Input Data Mahasiswa</h3>
<form action="" method="POST">
    <table>
        <tr>
            <td>NO</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>No. Telp</td>
        </tr>

        <?php for ($i = 1; $i <= $jumlah; $i++) : ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><input type="text" name="nim[]"></td>
            <td><input type="text" name="nama[]"></td>
            <td><input type="text" name="telpon[]"></td>
        </tr>
        <?php endfor; ?>
    </table>
    <input type="submit" name="tampil" value="Tampilkan">
</form>
<?php endif; ?>

<?php
if (isset($_POST['tampil'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $telpon = $_POST['telpon'];

    for ($i = 0; $i < count($nama); $i++) {
        $no = $i + 1;
        echo "NO." . $no . " NIM : " . $nim[$i] . " Nama : " . $nama[$i] . " Telp : "  . $telpon[$i] . "<br>";
    }
}
?>