<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KATALOG BUKU TABULINE</title>
    <form action="" method="POST">
    <h2>KATALOG BUKU TOBULINE</h2>
    <table width="759" height="193" border="0">
        <?php
    $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_buku");
    while ($data = mysqli_fetch_array($tampil)) 
    {
      echo"
        <tr>
        <td width='100' rowspan='8' align='center'>
            <img src='gambar/$data[photo_buku]' width='90' height='122'>
        </td>
        </tr>

            <tr>
                <td width='100' height='30'>Judul Buku</td>
                <td width='12'>:</td>
                <td width='400'><b>$data[judul_buku]</b></td>
            </tr>

            <tr>
                <td>Pengarang</td>
                <td>:</td>
                <td>$data[pengarang]</td>
            </tr>

            <tr>
                <td>Penerbit</td>
                <td>:</td>
                <td>$data[penerbit]</td>
            </tr>

            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td>$data[tahun]</td>
            </tr>

            <tr>
                <td>Dekripsi</td>
                <td>:</td>
                <td>$data[deskripsi]</td>
            </tr>

            <tr>
                <td>Stok</td>
                <td>:</td>
                <td>$data[stok]</td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>$data[harga]</td>
            </tr>
         <tr>
            <td colspan='4' align='center'><input type='submit' name='submit' value='Beli'>
            </td>
        </tr>";}?>
    </table>
    </form>
</head>

<body>

</body>

</html>