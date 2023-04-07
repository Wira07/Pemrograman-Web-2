<?php
extract($_POST);
function tampilAlert($pesan) {
    echo"<script>alert('Pesan : $pesan');
    window.history.go(-1);</script>";
}
function kuadrat($bilangan){
    $kuadrat = pow($bilangan,2);
    echo "<script> alert ('hasil $bilangan kuadrat = $kuadrat')
    window.history.go(-1);</script>";
    return 1;
}
switch($submit)
{
    case "Tampikan" : tampilAlert($pesan); break;
    case "Kuadratkan" : print(kuadrat($bilangan)); break;
}
?>
<TITLE>Latihan Fungsi</TITLE>
<FORM ACTION="modul_4e.php" METHOD="POST">
    <h2>Program Fungsi</h2>
    <table>
        <tr>
            <td>Tuliskan Pesan Anda</td>
            <td>:</td>
            <td><input type="text" name="pesan"></td>
        </tr>
        <tr>
            <td>Tuliskan Bilangan</td>
            <td>:</td>
            <td><input type="text" name="bilangan"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="Tampikan">
            <input type="submit" name="submit" value="Kuadratkan"></td>
        </tr>
    </table>
</FORM>     