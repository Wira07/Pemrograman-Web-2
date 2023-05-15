<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Member</title>
</head>

<body>
    <form name="form1" method="post" action="index.php?menu=simpan_member">
        <PRE>
        <h2>Register Member TOBULINE</h2>
        Nama Member   : <input type="text" name="name_member"><br>
        Jenis Kelamin : <input type="radio" name="jk" value="L" id="jk_0">Laki-Laki
                        <input type="radio" name="jk" value="P" id="jk_1">Perempuan<br>
        Alamat        : <textarea name="alamat"></textarea>
        No HP         : <input type="text" name="nope">
        Email         : <input type="text" name="email">
        Password      : <input type="text" name="pass">
        Foto KTP      : <input type="file" name="ktp">

        <input name="submit" type="submit" value="DAFTAR">
        <input name="batal" type="reset" value="batal">
    </PRE>
    </form>
</body>

</html>