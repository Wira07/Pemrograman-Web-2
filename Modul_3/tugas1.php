<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<center><b>FORM LOGIN</br>";
    echo "WEB UNIVERSITAS KUNINGAN</b>";
    echo "</center><br>";
    extract($_POST);
    if (isset($login)) {
        $user = 'rio';
        $pass = '12345';
        if ($user == 'achmatim' && $pass == '123') {
            echo 'Login Berhasil';
        } else {
            echo 'Login Gagal';
        }
    }
    ?>

    <html>

    <body>
        <center>
            <form action='' method='POST' name='inputForm'>
                Username : <input type='text' name='user'> </br>
                Password : <input type='password' name='pass'></br>
                <input type='submit' name='login' value='Login'>
            </form>
        </center>

    </body>

    </html>