<?php
echo "<center><b>FAKULTAS ILMU KOMPUTER</br>";
echo "UNIVERSITAS KUNINGAN</b>";
echo "<hr size='5'></hr>";
print "INPUT DATA MAHASISWA 2020</center></br>";
// tampil data
extract($_POST);
if (isset($Simpan))
{
   echo "<center><br>DATA HASIL INPUT</br>";
   echo "NIM = <b>$nim</b>
    <br>Nama = <b>$nama</b>
    <br>Jenis Kelamin = <b>$jk</b>
    <br>Program Studi = <b>$prodi</b>
    <br>Alamat = <b>$alamat</b>
   </center>";
}
else
{
    echo "
    <form id='form1' name='form1' method='post' action='modul_3c.php'>
        <table width='350' border='0' align='center'>
        <tr>
            <td colspan='3'>INPUT BIODATA</td>
        </tr>
        <tr>
            <td width='18'>NIM</td>
            <td width='15'>:</td>
            <td width='228'><lable>
            <input name='nim' type='text' id='nim' size='20' maxlength='15' />
            </lable></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><lable>
                <input name='nama' type='text' id='nama' />
            </lable></td>
        </tr>
         <tr>
            <td>JK</td>
            <td>:</td>
         <td><p>
            <label>
                 <input type='radio' name='jk' value='L' id='jk_0' />
                Laki-laki</label>
            <br /><label>
              <input type='radio' name='jk'    value='P'    id='jk_1' />
            Perempuan</label>
            <br />
            </p></td></tr>
        <td>Prodi</td>
        <td>:</td><td><lable>
        <select name='prodi' id='prodi'>
            <option value='Teknik Informatika'>Teknik Informatika S1</option>
            <option value='Sistem Informasi'>Sistem Informasi S1</option>
            <option value='Teknik Komputer'>Management Informatika D3</option>
            <option value='Teknik Komputer'>Teknik Informatika D3</option>
        </select>
        </lable></td>
    </tr><tr>
        <td>Alamat</td>
        <td>:</td>
        <td><lable>
            <textarea name='alamat' cols='30' rows='3' id='alamat'></textarea>
            
        </lable></td>
    </tr><tr>
    <td colspan='3' align='center'>
        <input type='submit' name='Simpan' value='Simpan' />
        <input type='reset' name='Cancel' value='Cancel' />
    </td></tr>
</table></form>";
}
?>